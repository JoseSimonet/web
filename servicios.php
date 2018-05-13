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
                            <li class="active"><a href="servicios.php">Servicios</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="texto-encabezado text-xs-center">
                <div class="container">
                    <h1 class="display-4  wow bounceIn">Servicios</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">Sistema de gestión de tiempo en la empresa</p>
                </div>
            </div>
        </section>
        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-right">
                        <a href="index.php">Inicio</a> » Servicios
                    </div>
                </div>
            </div>
        </section>
        <main class="p-y-1 lista-servicios">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            <h4>Desarrollo en su integridad</h4>
                            <p>
                                Desarrollamos la aplicación móvil en tu totalidad garantizando la completa personalizanción de la misma.
                            </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio1">Más información</a>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <h4>Seguridad e integridad</h4>
                            <p>
                                Ofrecemos un servicio seguro en cualquier interfaz, tanto en el apartado web como en la aplicación móvil.
                            </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio2">Más información</a>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="item-servicios">
                            <i class="fas fa-inbox" aria-hidden="true"></i>
                            <h4>Respaldo de información</h4>
                            <p>
                                Le garantizamos la total seguridad y confidencialidad de la información a tratar el proceso de gestión y acceso de los horarios.
                            </p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio3">Más información</a>
                        </article>
                    </div>
                </div>
            </div>
        </main>
        <footer class="piedepagina p-y-1" role="contentinfo">
            <?php include 'footer.php'?>
        </footer>
        <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>
        <!-- Modal 1  -->
        <div class="modal fade" id="servicio1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Desarrollo en su integridad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>
                            <div class="col-md-4">
                                <img src="images/servicio-1.svg" alt="" width="200" class="img-fluid m-x-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2  -->
        <div class="modal fade" id="servicio2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Seguridad e integridad</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>
                            <div class="col-md-4">
                                <img src="images/servicio-2.svg" alt="" width="200" class="img-fluid m-x-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3  -->
        <div class="modal fade" id="servicio3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Respaldo de información</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                            </div>
                            <div class="col-md-4">
                                <img src="images/servicio-3.svg" alt="" width="200" class="img-fluid m-x-auto m-t-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carga de archivos  JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/carga.js"></script>
    </body>
</html>