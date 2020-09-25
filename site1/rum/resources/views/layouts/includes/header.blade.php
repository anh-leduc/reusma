<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resource Usage Management</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon" />
    @if(Request::is('project')||Request::is('employee')||Request::is('employee/*'))


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/dist/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}">
    <script src="{{asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    
    <script src="https://bossanova.uk/jexcel/v4/jexcel.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v4/jexcel.css" type="text/css" />
    <script src="https://bossanova.uk/jsuites/v3/jsuites.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jsuites/v3/jsuites.css" type="text/css" />
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v4/jexcel.datatables.css" type="text/css" />
    @elseif(Request::is('project/*'))

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/theme.min.css')}}">
    <script src="{{asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://bossanova.uk/jexcel/v4/jexcel.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v4/jexcel.css" type="text/css" />
    <script src="https://bossanova.uk/jsuites/v3/jsuites.js"></script>
    <link rel="stylesheet" href="https://bossanova.uk/jsuites/v3/jsuites.css" type="text/css" />
    <link rel="stylesheet" href="https://bossanova.uk/jexcel/v4/jexcel.datatables.css" type="text/css" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    
    @else

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/icon-kit/dist/css/iconkit.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/ionicons/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/weather-icons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/c3/c3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/theme.min.css')}}">
    <script src="{{asset('assets/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @endif

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="dark">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">

                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                            </div>
                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                    <!-- User-Dropdown -->
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown show nav-link" style="background-color: white;">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i  class="fas fa-user-tie"></i>
                            </a>
                            <!-- Menu-Dropdown -->
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" x-placement="bottom-end">
                                <a class="dropdown-item" href="/logout">
                                    <i class="fas fa-power-off dropdown-icon">
                                        @lang('language.Logout')
                                    </i>
                                </a>
                                @if(session('lang')=='en')
                                <a class="dropdown-item" href="{{ route('lang',['lang' => 'vi']) }}">
                                    <i class="fas fa-globe dropdown-icon">
                                        @lang('language.Language')
                                    </i>
                                </a>
                                @else
                                <a class="dropdown-item" href="{{ route('lang',['lang' => 'en']) }}">
                                    <i class="fas fa-globe dropdown-icon">
                                        @lang('language.Language')
                                    </i>
                                </a>
                                @endif
                            </div>
                            <!-- End menu-dropdown  -->
                        </div>
                    </div>
                    <!-- End user-dropdown -->
                </div>
            </div>
        </header>
