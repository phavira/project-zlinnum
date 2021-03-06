<!DOCTYPE html>
<html lang="en">
{{--<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    {{--    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
        <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">--}}


    <link rel="stylesheet" href="{{asset('assets/custom/css/scss-model.css')}}">
    <link rel="stylesheet" href="{{asset('assets/c-css/normalize.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/c-css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/c-css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/c-css/pe-icon-7-stroke.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/c-css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="{{asset('assets/c-css/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/c-css/jqvmap.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/c-css/weather-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/c-css/fullcalendar.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/custom/css/master.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bootstrap-datetimepicker-standalone.css')}}" rel="stylesheet">
    <link href="{{asset('assets/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/quill/quill.core.css')}}" rel="stylesheet">
    <link href="{{asset('assets/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fas-icon/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vquery/kh.vquery.css')}}" rel="stylesheet">


    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

        .loading-background {
            background-image: url('{{asset('assets/custom/media/ShadowyGratefulHamster-size_restricted.gif')}}') !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: 30px !important;
        }

        .user-menu.dropdown-menu.show {
            position: absolute !important;
        }

        .lazyloading {
            background: url({{asset('assets/media/loadem.svg')}});
            background-size: 200px !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
        }

        .right-panel {
            position: absolute;
        }
        a.navbar-brand {
            text-align: center;
        }

    </style>
    @yield('style')

    {{--<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>--}}

</head>
<div>
<div class="notification">
</div>
<div style="width: 100%;height: 100%;position: fixed;background: rgba(0,0,0,0.35);z-index: 1080" id="loading">
    <img src="{{asset('assets/custom/media/load.svg')}}" alt=""
         style="margin: 0 auto;display: block;top: 30%;position: relative">
</div>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dashboard">
                    <a href="{{route('dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                {{--<li>
                    <a href="{{route('dashboard')}}"><i class="menu-icon fa fa-handshake-o"></i>Member </a>
                </li>--}}
                <li class="my-listing">
                    <a href="{{route('my-listing')}}"><i class="menu-icon fa fa-bar-chart-o"></i>My Listing </a>
                </li>
                <li class="all-user">
                    <a href="{{route('all-user')}}"><i class="menu-icon fa fa-users"></i>All User </a>
                </li>
                <li class="menu-item-has-children dropdown sub-new1 project-bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fas fa-building"></i></i>Project</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="new-project"><i class="fa fa-puzzle-piece"></i><a href="{{route('add-project')}}">New
                                Project</a></li>
                        <li class="project-list"><i class="fas fa-list-ul"></i><a href="{{route(('show-project'))}}">Project
                                Listing</a></li>
                        <li class="property-list"><i class="fas fa-list-ul"></i><a href="{{route('show-property')}}">Property
                                Listing </a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown event-bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-gift"></i>Event</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="new-event"><i class="fa fa-puzzle-piece"></i><a href="{{route('new-event')}}">New
                                Event</a></li>
                        <li class="event-list"><i class="fas fa-list-ul"></i><a href="{{route('show-event')}}">Event
                                Listing</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown banner-bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Banner</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="new-banner"><i class="fa fa-puzzle-piece"></i><a href="{{route('new-banner')}}">New
                                Banner</a></li>
                        <li class="list-banner"><i class="fa fa-id-badge"></i><a href="{{route('list-banner')}}">Banner
                                Listing</a></li>
                    </ul>
                </li>
                {{--   <li class="menu-title">UI elements</li><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                       <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                           <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                           <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                           <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                           <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                           <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                           <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                           <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                           <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                           <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                       </ul>
                   </li>
                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                           <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                       </ul>
                   </li>
                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                           <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                       </ul>
                   </li>

                   <li class="menu-title">Icons</li><!-- /.menu-title -->

                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                           <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                       </ul>
                   </li>
                   <li>
                       <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                           <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                           <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                       </ul>
                   </li>

                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                           <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                       </ul>
                   </li>
                   <li class="menu-tit  tras</li><!-- /.menu-title -->
                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                       <ul class="sub-menu children dropdown-menu">
                           <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                           <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                           <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                       </ul>
                   </li>--}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="{{asset('assets/media/logo.png')}}" alt="Logo"  style="width: 92px !important;"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('assets/media/logo.png')}}" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/1.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/2.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/3.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('images/avatar/4.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{Session::get('photo')}}" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{route('view-profile')}}"><i class="fa fa- user"></i>My Profile</a>
                        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- /#header -->
    <!-- Content -->
@isset($no_permission)
    @component('components.permission',['no_permission'=>$no_permission])
    @endcomponent
@endisset
@yield('content')
<!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; @php if(date('Y')!="2019") {echo "2019 -";}echo date('Y') @endphp C21apex.com
                </div>

            </div>
        </div>
    </footer>
    <!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/vquery/kh.vquery.js')}}"></script>
<script src="{{asset('assets/c-js/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/jqery-match-height/dist/jquery.matchHeight.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/quill/quill.js')}}"></script>
<script src="{{asset('assets/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('assets/js/ls.bgset.min.js')}}"></script>


<!--  Chart js -->
<script src="{{asset('assets/chart.js/dist/Chart.bundle.min.js')}}"></script>

<!--Chartist Chart-->
<script src="{{asset('assets/c-js/chartist.min.js')}}"></script>
<script src="{{asset('assets/c-js/chartist-plugin-legend.min.js')}}"></script>

<script src="{{asset('assets/c-js/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/c-js/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets/c-js/jquery.flot.spline.min.js')}}"></script>


<script src="{{asset('assets/c-js/moment.min.js')}}"></script>
<script src="{{asset('assets/c-js/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/js/init/fullcalendar-init.js')}}"></script>

<script src="{{asset('assets/chart.js/dist/Chart.js')}}"></script>
<script src="{{asset('assets/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/vquery/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/vquery/bootstrap-notify.js')}}"></script>
<script src="{{asset('assets/custom/js/custom.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script>
    var toolbarOptions = [
        [{'header': 1}, {'header': 2}],
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote'],// custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction

        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown

        [{'font': []}],
        [{'align': []}],

        ['clean'],
        ['link', 'image', 'video']


    ];
</script>
@yield('script')



</body>
</html>
