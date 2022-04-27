<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    <!-- Bootstrap -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{Config::get('constants.RUTA_APP')}}css/custom.min.css" rel="stylesheet">
    <link href="{{Config::get('constants.RUTA_APP')}}css/estilos.css" rel="stylesheet">
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap-datetimepicker/build/css/datetimepicker.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SEGURIDAD</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{auth()->user()->image_url}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenido</span>
                            <h2>{{auth()->user()->first_name." ".auth()->user()->last_name}}</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    @include('partials.menu')
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{auth()->user()->image_url}}" alt="">{{auth()->user()->first_name." ".auth()->user()->last_name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault; document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> Salir
                                        </a>
                                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
          
            <div class="right_col" role="main">
                <div class="">
                    @yield('header')
                    <div class="clearfix"></div>
                    <div class="row" style="width: 103%; margin-right:13px;margin-left:-22px;">
                        <div class="col-ms-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>@yield('title')</h2>
                                    <div class="clarfix"></div>
                                </div>
                                <div class="x_content">
                                    <h2>@yield('content')</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    DIGICI|SEGURIDAD |CONTROL ASISTENCIA 2022|V1.0
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <form id="delete" style="display: none;" method="post">
        @csrf
        @method('delete')
    </form>
    <form id="token" style="display: none;">
        @csrf

    </form>
    <script>
        let base_url = "{{Config::get('constants.RUTA_APP')}}";
        let pathname = "{{url()->current()}}";
    </script>
    <!-- jQuery -->
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/nprogress/nprogress.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/moment/min/moment.min.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap-datetimepicker/datetimepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{Config::get('constants.RUTA_APP')}}js/custom.min.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/sweetalert2.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/reloj.js"></script>
    <script>
        $("#dob").datetimepicker({
            format: "YYY-MM-DD"
        })
    </script>

    @if(session('estado'=='OK'))
    <script>
        Swal.fire(
            "{{session('mensaje')}}",
            "",
            "success"
        )
    </script>
    @endif
</body>

</html>