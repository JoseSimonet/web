<?php 
  session_start(); 
?>

<html lang="es">
    <head><title>MYT Manage Your Time</title>
        <meta charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
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
    <body>
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
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="nosotros.php">Nosotros</a></li>
                            <li><a href="servicios.php">Servicios</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="texto-encabezado text-xs-center">
                <div class="container">
                    <h1 class="display-4 wow bounceIn">Gestione el tiempo de su empresa</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">Un servicio personalizado según las necesidades y requerimientos de la empresa.</p>
                    <a href="contacto.php" class="btn btn-primary btn-lg">Póngase en contacto</a>
                </div>
            </div>
            <div class="flecha-bajar text-xs-center">
                <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
        </section>
        <section class="agencia p-y-1" id="agencia">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                        <h2 class="h3 text-xs-center text-md-left font-weight-bold">Sistema de gestión empresarial</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.</p>
                    </div>
                    <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                        <img src="images/agencia.svg" alt="La agencia">
                    </div>
                </div>
            </div>
        </section>
        <section class="tu-mejor-eleccion p-y-1">
            <div class="container">
                <h2 class="h3 text-xs-center font-weight-bold">¿Por qué elegir <span>ManageYourTime?</span></h2>
                <p class="text-xs-center">
                    Gestión web y móvil para empresas
                </p>
                <div class="row">
                    <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-left">
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Gestión en la nube</h4>
                                <p class="hidden-md-down">Sin necesidad de ampliar servidores locales.</p>
                            </div>
                        </li>
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".7s">
                            <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Total transparencia</h4>
                                <p class="hidden-md-down">Siempre dispuestos atender a la empresa en cuestión.</p>
                            </div>
                        </li>
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.1s">
                            <i class="fas fa-comments" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Sistema de opiniones</h4>
                                <p class="hidden-md-down">Deje su feedback o propuesta de mejora.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="hidden-md-down col-lg-4">
                        <img src="images/mundo.svg" alt="Mundo movil">
                    </div>
                    <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".5s">
                            <i class="fa  fa-calendar" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Organización</h4>
                                <p class="hidden-md-down">Sistema de fácil interacción para la empresa.</p>
                            </div>
                        </li>
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".9s">
                            <i class="fas fa-check-square" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Diseño personalizado</h4>
                                <p class="hidden-md-down">Adaptamos el Front-End a su gusto.</p>
                            </div>
                        </li>
                        <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay="1.3s">
                            <i class="fa  fa-cogs" aria-hidden="true"></i>
                            <div class="contenedor-eleccion">
                                <h4>Funciones a medida</h4>
                                <p class="hidden-md-down">Nos encargamos de desarrollar las funciones que necesite.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <main class="servicios p-y-1">
            <div class="container">
                <h2 class="text-xs-center font-weight-bold">Nuestros Servicios</h2>
                <div class="row">
                    <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                        <img src="images/servicio-1.svg" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                        <h3><a href="#"> Desarrollo en su integridad </a></h3>
                        <p class="hidden-sm-down">Desarrollamos la aplicación móvil en tu totalidad garantizando la completa personalizanción de la misma. </p>
                        <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                    </article>
                    <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                        <img src="images/servicio-2.svg" alt="Servicio Consultoría Tecnológica">
                        <h3><a href="#">Seguridad e integridad</a></h3>
                        <p class="hidden-sm-down">Ofrecemos un servicio seguro en cualquier interfaz, tanto en el apartado web como en la aplicación móvil.</p>
                        <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                    </article>
                    <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                        <img src="images/servicio-3.svg" alt="Servicio Marketing y publicidad Movil">
                        <h3><a href="#">Respaldo de información</a></h3>
                        <p class="hidden-sm-down">Le garantizamos la total seguridad y confidencialidad de la información a tratar el proceso de gestión y acceso de los horarios.</p>
                        <a href="#" class="btn btn-secondary hidden-sm-down">Más información</a>
                    </article>
                </div>
            </div>
        </main>
        <footer class="piedepagina p-y-1" role="contentinfo">
            <div class="container">
                <p>2018 © ManageYourTime -  Todos los derechos reservados</p>
                <ul class="redes-sociales">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"> </i>  </a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube" aria-hidden="true"></i> </a></li>
                </ul>
            </div>
        </footer>
        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
        <!-- Carga de archivos JS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/carga.js"></script>
    </body>
</html>