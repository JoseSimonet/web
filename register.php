
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
        <!-- Carga galería imágenes -->
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="paginas-internas">
        <section class="bienvenidos">
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
                    <p class="wow bounceIn" data-wow-delay=".3s">Identificación de usuario.</p>
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
        
        <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal" role="form" method="POST" action="https://themequarry.com/register">
                        <input name="_token" value="tGYmRmFxNEs4KkaUu7b8GdFccrc746mDJdKWw3Yt" type="hidden">

<div class="form-group">
    <label class="col-md-3 control-label">Nombre</label>
    <div class="col-md-7">
        <input class="form-control" name="name" value="" type="text">
            </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Apellidos</label>
    <div class="col-md-7">
        <input class="form-control" name="second_name" value="" type="text">
            </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Dirección E-Mail</label>
    <div class="col-md-7">
        <input class="form-control" name="email" value="" type="email">
            </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Contraseña</label>

    <div class="col-md-7">
        <input class="form-control" name="password" type="password">

            </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Confirmar Contraseña</label>

    <div class="col-md-7">
        <input class="form-control" name="password_confirmation" type="password">

            </div>
</div>
<div class="form-group">
    <div class="col-md-7 col-md-offset-3">
        <button type="submit" class="btn btn-primary margin-right-5">
            Registrar
        </button>
        <a href="https://themequarry.com/login">¿Todavía no tiene una cuenta?</a>
    </div>
</div>                    </form>
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
    </body>
</html>