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
    <!-- <link href="{{Config::get('constants.RUTA_APP')}}vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    <!-- Animate.css -->
    <link href="{{Config::get('constants.RUTA_APP')}}vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{Config::get('constants.RUTA_APP')}}css/custom.min.css" rel="stylesheet">
    <link href="{{Config::get('constants.RUTA_APP')}}css/estilos.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form id="ingresar" action="{{route('login')}}" method="POST">
                        @csrf
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su correo" value="{{old('email')}}" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña" required="" />
                        </div>
                        @error('email')
                        <div class="error_msg">
                            <strong>Error validando datos de formulario</strong>
                        </div>
                        @enderror
                        <div>
                            <a class="btn btn-default submit" id="validar" href="javascript:void(0)">Iniciar sessión</a>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <!-- <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p> -->

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><img style="width: 50px; height: 50px;" class="imgFinger" src="{{Config::get('constants.RUTA_APP')}}images/finger.png"> Control de Asistencia Seguridad</h1>
                                <p>©2016 All Rights Reserved. Departamento de desarrollo Informatica. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <!-- <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Crear Cuenta</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Control de Asistencia Seguridad</h1>
                                <p>©2016 All Rights Reserved. Departamento de desarrollo Informatica. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div> -->
        </div>
    </div>
    <script src="{{Config::get('constants.RUTA_APP')}}vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/sweetalert2.js"></script>
    <script src="{{Config::get('constants.RUTA_APP')}}js/login.js"></script>
</body>

</html>