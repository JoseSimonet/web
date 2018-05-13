<?php
session_start();
include 'server.php'?>

<html lang="es">
    <head>
        <?php include 'header.php'?>
    </head>
    <body class="paginas-internas">
        <section class="bienvenidos">
            <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
                <div class="container">
                    <a href="index.php" class="logo">
                        <img src="images/logoMYT.svg" alt="Logo del sitio">
                    </a>
                    <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>
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
                                <a href="#" class="active" id="login-form-link">Acceso</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Registro</a>
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
            <?php include 'footer.php'?>
        </footer>
            <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
            <!-- Carga de archivos  JS -->
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/smooth-scroll.min.js"></script>
            <script src="js/carga.js"></script>
            <script src="js/function.js"></script>
            <script src="js/date.js"></script>
        </body>
    </html>