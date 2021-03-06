@extends('template.master')
@section('title') New Project @endsection
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>New Project</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">New Project</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        {{--<div class="card-header">
                            <strong class="card-title">User</strong>
                        </div>--}}
                        <div class="card-body">
                            <div class="flex-to-block">
                                <div class="item active main-item" type="project">Project</div>
                                <div class="item main-item" type="property">Property</div>
                            </div>
                            @component('components.project',['type'=>$type,'country_list'=>$country_list])

                                @slot('button_action')
                                    <div class="row">
                                        <div class="col12 col-4"></div>
                                        <div class="col12 col-4"></div>
                                        <div class="col12 col-4" style="text-align: right"><button
                                                class="btn btn-success save-project"
                                                datasrc="{{route('store-project')}}"
                                                data-image="{{route('add-image')}}">Insert Project</button></div>
                                    </div>
                                @endslot

                            @endcomponent
                            @component('components.property',['datalist'=>$datalist,'country_list'=>$country_list]) @endcomponent
                            {{-- Property start Element --}}

                            {{-- Property End Element --}}
                        </div>
                    </div>
                </div>


            </div>

        </div><!-- .animated -->
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/custom/js/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCemCVmfbBlPHgxU7SxVtvxivZM8HopGY&callback=myMap"></script>
    {{-- Script --}}
    <script>

        var doc = $(document);
        $(document).ready(function () {
            $('.project-bar')
                .addClass('active show')
                .find('.new-project')
                .addClass('active')
                .closest('.project-bar')
                .find('.sub-menu')
                .addClass('show');

            $('#datepicker').datetimepicker({
                format:"Y-MM-D"
            });
            $('#datepicker1').datetimepicker({
                format:"Y-MM-D"
            });
        });

        new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Detail',
        });
        new Quill('#editor1', {
            theme: 'snow',
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Detail',
        });
    </script>



@endsection


