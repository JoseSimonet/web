<html lang="es">
    <head>
        <?php include 'header.php'?>
    </head>
    <body>
        <section class="bienvenidos">
            <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
                <div class="container">
                    <a href="index.php" class="logo">
                        <img src="images/logoMYT.svg" style="width: 10rem;" alt="Logo del sitio">
                    </a>
                    <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>
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
                        <p>En ManageYourTime te garantizamos una completa gestión del itinerario tanto en el ámbito laboral como también en el personal. Podrás disfrutar de un sistema personalizado a tus necesidades y preferencias tanto en el apartado web como en el móvil gracias a nuestra aplicación de gestión propia.</p>
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
                        <h3>Desarrollo en su integridad</h3>
                        <p class="hidden-sm-down">Desarrollamos la aplicación móvil en tu totalidad garantizando la completa personalizanción de la misma. </p>
                    </article>
                    <article class="col-md-4 wow bounceInUp" data-wow-delay=".6s">
                        <img src="images/servicio-2.svg" alt="Servicio Consultoría Tecnológica">
                        <h3>Seguridad e integridad</h3>
                        <p class="hidden-sm-down">Ofrecemos un servicio seguro en cualquier interfaz, tanto en el apartado web como en la aplicación móvil.</p>
                    </article>
                    <article class="col-md-4 wow bounceInRight" data-wow-delay="1s">
                        <img src="images/servicio-3.svg" alt="Servicio Marketing y publicidad Movil">
                        <h3>>Respaldo de información</h3>
                        <p class="hidden-sm-down">Le garantizamos la total seguridad y confidencialidad de la información a tratar el proceso de gestión y acceso de los horarios.</p>
                    </article>
                </div>
            </div>
        </main>
        <footer class="piedepagina p-y-1" role="contentinfo">
            <?php include 'footer.php'?>
        </footer>
        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
        <!-- Carga de archivos JS -->
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/carga.js"></script>
    </body>
</html>