<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DIGICI | SEGURIDAD</title>

    <!-- Bootstrap -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{Config::get('constants.RUTA_APP')}}css/custom.min.css" rel="stylesheet">
    <link href="{{Config::get('constants.RUTA_APP')}}css/estilos.css" rel="stylesheet">
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
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>John Doe</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a ><i class="fa fa-home"></i> Login <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{url('login')}}">Inicio de sesión</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Sensor <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form.html">Activar sensor</a></li>
                                        <li><a href="form_advanced.html">Desactivar sensor</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>



            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Registrar Marcaje con identificación<i class="fa fa-hand-o-right"></i></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" id="user_id_number" class="form-control leftRadius" placeholder="Identificacion...">
                                    <span class="input-group-btn">
                                        <button id="register" class="btn btn-default rightRadius" type="button">Registrar</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Registrar con Huella dactilar</h2>
                                    <div style="float: right;">
                                        <div class="date">
                                            <span class="colorGray">
                                                <span class="colorGray" id="weekDay" class="weekDay"></span>,
                                                <span class="colorGray" id="day" class="day"></span>de
                                                <span class="colorGray" id="month" class="month"></span> del
                                                <span class="colorGray" id="year" class="year"></span>
                                            </span>
                                        </div>
                                        <div class="clock">

                                            <span class="colorGray" class="hours">Hora : </span>
                                            <span class="colorGray" id="hours" class="hours"></span>:
                                            <span class="colorGray" id="minutes" class="minutes"></span>:
                                            <span class="colorGray" id="seconds" class="seconds"></span>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="img">
                                        <img class="imgFinger" src="{{Config::get('constants.RUTA_APP')}}images/finger.png">
                                    </div>
                                    <div class="txtFinger ct2">------------------</div>
                                    <div class="dataUser">
                                        Identificacion :------------
                                        <br>
                                        Nombre :--------------
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form id="token" style="display: none;">
                    @csrf

                </form>
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
   
    <!-- Custom Theme Scripts -->
    <script src="{{Config::get('constants.RUTA_APP')}}js/custom.min.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/sweetalert2.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/reloj.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/funciones.js"></script>
   
</body>

</html>