<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <script src="{{asset('/backend')}}/js/jquery.min.js"></script>
        {{--  <script src="{{asset('/backend')}}/assets/jquery.validate/jquery.validate.min.js"></script>
        <script src="{{asset('/backend')}}/assets/jquery.validate/form-validation-init.js"></script>  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
        <style type="text/css">
            .notifyjs-corner{
                z-index: 10000 !important;
            }
        </style>
        <script src="{{asset('/backend')}}/assets/jquery-validation/jquery.validate.min.js"></script>

        <link rel="shortcut icon" href="{{ asset('/backend') }}/images/favicon_1.ico">
        <title>Moltran - Responsive Admin Dashboard Template</title>
        <!--Data Tables-->
        <link href="{{asset('/backend')}}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <link href="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <script src="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- Base Css Files -->
        <link href="{{asset('/backend')}}/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Icons -->
        <link src="{{asset('/backend')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link src="{{asset('/backend')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{asset('/backend')}}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('/backend')}}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('/backend')}}/css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link src="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{asset('/backend')}}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/backend')}}/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js does not work if you view the page via file: -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{asset('/backend')}}/js/modernizr.min.js"></script>


    </head>



    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ url('/home') }}" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('/backend')}}/upload/employee_photos/{{ Auth::user()->photo }}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a></li>
                                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->



