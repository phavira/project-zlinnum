<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\HttpRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use function MongoDB\BSON\toJSON;

class UserController extends MasterController
{
    private $id, $gender, $role, $email, $first_name, $last_name, $phone_number, $photo;

    public function ShowProfile()
    {
        return view('template.profile');
    }

    public function show_information()
    {
        $this->id = Session::get('id');
        $this->gender = Session::get('gender');
        $this->role = Session::get('role');
        $this->email = Session::get('email');
        $this->first_name = Session::get('first_name');
        $this->last_name = Session::get('last_name');
        $this->phone_number = Session::get('phone_number');
        $this->photo = Session::get('photo');
        return (object)[
            'id'=>$this->id,
            'gender'=>$this->gender,
            'role'=>$this->role,
            'email'=>$this->email,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'phone_number'=>$this->phone_number,
            'photo'=>$this->photo
        ];
    }

    /*public function change_profile_image(Request $request){
      if (Session::has('access')) {
          $key = Session::get('access');
          if ($request->hasFile('image')) {
              $file = $request->file('image');
              $mine = $file->getClientMimeType();
              $name = $file->getClientOriginalName();
              $data = ['userImage'=>curl_file_create($file,$mine,$name)];
              $this->http->ChangeProfileImage($key,$data);
          }else{
              return Response(['status'=>'error','message'=>'File error'],'401');
          }
      }else{
          return Response(['status'=>'error','message'=>'Requied SignIn'],'401');
      }
    }*/
    public function change_image(Request $request)
    {
        if ($request->hasFile('userImage')) {
            $token = Session::get('access');
            $file = $request->file('userImage');
            $result = $this->http->change_profile_image($token, $file);
            $result1 = json_decode($result);
            if ($result1->status_code == 200) {
                return $result;
            } else {
                return response($result1, 404);
            }
        } else {
            return response(['status_code' => 404, 'message' => 'invalid File'], 404);
        }

    }

    public function change_profile(Request $request)
    {
        if (Session::has('access')) {
            $type = $request->type;
            $key = Session::get('access');
            $first_name = Session::get('first_name');
            $last_name = Session::get('last_name');
            $phone_number = Session::get('phone_number');
            $gender = Session::get('gender');
            switch ($type) {
                case "name" :
                    $first_name = $request->first;
                    $last_name = $request->last;

                    break;
                case "phone_number":
                    $phone_number = $request->phone_number;

                    break;
                default :
                    return Response(['status_code' => 401, 'message' => 'Missing Type Request'], '401');
            }
            $check = $this->http->ChangeProfile($key, [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'phone_number' => $phone_number
            ]);
            $check = json_decode($check);
            if ($check->status_code == 200) {
                return Response()->json([
                    'status' => 'ok',
                    'message' => 'Update Success'
                ]);
            } else {
                return Response([
                    'status' => 'error',
                    'message' => 'Update Unsuccess'
                ], '401');
            }
        } else {
            return Response(['status' => '0', 'message' => 'Opp Human !!!'], '401');
        }

    }

    public function listUser(Request $request, $page = 1)
    {

        if (isset($request->limit)) {
            $limit = $request->limit;
        } else {
            $limit = 10;
        }
        if (isset($request->type)) {
            $type = strtoupper($request->type);
        } else {
            $type = "";
        }


        $key = Session::get('access');
        $list = (object)['status' => "OK", 'result' => [], 'paging' => []];
        if (isset($request->search)) {
            if (isset($page) && $page != null) {
                $list = json_decode($this->http->getuser($key, $type, $limit, $page, $request->search));

            } else {
                $list = json_decode($this->http->getuser($key, $type, $limit, '', $request->search));
            }
        } else {
            if (isset($page) && $page != null) {
                $list = json_decode($this->http->getuser($key, $type, $limit, $page, ''));
            } else {

                $list = json_decode($this->http->getuser($key, $type, $limit));

            }

        }

        if ($list->status_code == "200") {
            $user = $list->result;
            $paging = $list->paginate;

            return view('template.all-user', compact('user', 'paging', 'type'));
        } else {
            $paging = false;
            $user = [];
            $no_permission = true;
            return view('template.all-user', compact('type', 'user', 'paging','no_permission'));
        }

    }

    static function check_image($photo, $type)
    {
        switch ($type) {
            case 'photo':
                if ($photo != null) {
                    return $photo;
                } else {
                    return asset('assets/custom/media/profile.jpg');
                }

                break;
        }

    }

    public function search(Request $request)
    {
        $key = Session::get('access');
        $search = $request->search;
        $name = [];
        $json = json_decode($this->http->getuser($key, '', '', '', $search));
        if ($json->status_code == 200) {
            foreach ($json->result as $value) {
                $name [] = $value->first_name . " " . $value->last_name;
            }
            return $name;
        } else {
            return "false";
        }

    }
    public function signup(){
        $enable_email = url('api/enable-email');
        return view('auth.Register',['enable_email'=>$enable_email,'signup_post'=>url('api/sign-up-post')]);
    }
    public function signup_post(Request $request){
        $rule = [
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'confirm_password'=>'required|same:password',
            'gender'=>'required'
        ];
        $validator = Validator::make($request->all(),$rule);
        if($validator->fails()){
            return \response(['status_code'=>400,'message'=>$validator->errors()],400);
        }else{
            $result = $this->user_request->sign_up_post(['email'=>$request->email]);
            if($result->status_code==200){
                return \response((array)$result);
            }else{
                try{
                    return \response(['status_code'=>$result->status_code,'message'=>['email_error'=>$result->message]],$result->status_code);
                }catch (\Exception $error){
                    return \response(['status_code'=>$result->status_code,'message'=>['general'=>'Error Server Please Try Again Later','dbug'=>$result]],$result->status_code);
                }

            }

        }

    }



}
