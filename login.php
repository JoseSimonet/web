<?php
session_start();
include 'server.php'?>
?>

<html lang="en">
    <head><title>MYT Manage Your Time</title>
        <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- Cargando fuentes -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'/>
        <!-- Carga de iconos -->
        <link href='fonts/web-fonts-with-css/css/fontawesome-all.min.css' rel='stylesheet' type='text/css'/>
        <!-- Carga de archivos CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="paginas-internas">
        <section class="bienvenidos" style="height: 30vh;">
            <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
                <div class="container">
                    <a href="index.php" class="logo">
                        <img src="images/logoMYT.svg" alt="Logo del sitio">
                    </a>
                    <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>
                    <form action="#" id="bloque-buscar" class="collapse">
                        <div class="contenedor-bloque-buscar">
                            <input type="text" placeholder="Buscar...">
                            <input type="submit" value="Buscar">
                        </div>
                    </form>
                    <nav id="menu-principal" class="collapse">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="nosotros.php">Nosotros</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li class="active"><a href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="texto-encabezado text-xs-center">
                <div class="container">
                    <h1 class="display-4 wow bounceIn">Login</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">Identificación de usuario</p>
                </div>
            </div>
        </section>
        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-right">
                        <a href="index.php">Inicio</a> » Login
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin: 5rem auto;">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Registrarse</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                    <?php include 'errors.php';?>
                                    <?php include 'success.php';?>
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3" style="margin: auto;">
                                                <input type="submit" name="login_user" id="login_user" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="#" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <form id="register-form" action="" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="surname" id="surname" tabindex="1" class="form-control" placeholder="Apellidos">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="<?php echo $username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email_1" id="email" tabindex="1" class="form-control" placeholder="Correo electrónico" value="<?php echo $email_1; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email_2" id="confirm-email" tabindex="1" class="form-control" placeholder="Confirmar correo electrónico">
                                    </div>
                                    <div class="form-group">
                                            <input type="date" name="birthday" tabindex="2" class="form-control" id="birthday">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_1" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_2" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3" style="margin: auto;">
                                                <input type="submit" name="reg_user" id="reg_user" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



            <footer class="piedepagina p-y-1" role="contentinfo">
                <div class="container">
                    <p>2018 © ManageYourTime Todos los derechos reservados</p>
                    <ul class="redes-sociales">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"> </i>  </a></li>
                        <li><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
                        <li><a href="https://www.youtube.com/"><i class="fab fa-youtube" aria-hidden="true"></i> </a></li>
                    </ul>
                </div>
            </footer>
            <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
            <!-- Carga de archivos  JS -->
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/smooth-scroll.min.js"></script>
            <script src="js/carga.js"></script>
            <script src="js/function.js"></script>
            <script src ="js/date.js"></script>
        </body>
    </html>