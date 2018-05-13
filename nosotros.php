<html lang="es">
    <head>
        <?php include 'header.php'?>
    </head>
    <body class="paginas-internas">
        <section class="bienvenidos">
            <header class="encabezado navbar-fixed-top" id="encabezado" role="banner">
                <div class="container">
                    <a class="logo" href="index.php">
                        <img src="images/logoMYT.svg" alt="Logo del sitio">
                    </a>
                    <button aria-expanded="false" class="boton-menu hidden-md-up" data-target="#menu-principal" data-toggle="collapse" type="button">
                    <i aria-hidden="true" class="fa fa-bars">
                    </i>
                    </button>
                    <nav class="collapse" id="menu-principal">
                        <ul>
                            <li>
                                <a href="index.php">
                                    Inicio
                                </a>
                            </li>
                            <li class="active">
                                <a href="nosotros.php">
                                    Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="servicios.php">
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a href="contacto.php">
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <a href="login.php">
                                    Login
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="texto-encabezado text-xs-center">
                <div class="container">
                    <h1 class="display-4">
                    Nosotros
                    </h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">
                        ¿Quienes somos? y ¿Qué hacemos?
                    </p>
                </div>
            </div>
        </section>
        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-right">
                        <a href="index.php">
                            Inicio
                        </a>
                        » Nosotros
                    </div>
                </div>
            </div>
        </section>
        <main class="p-y-1">
            <div class="container">
                <div class="row">
                    <article class="col-md-8">
                        <h2>
                        La gestión nunca ha sido tan fácil
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                        </p>
                        <div aria-multiselectable="true" id="accordion" role="tablist">
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
                                <a data-parent="#accordion" data-toggle="collapse" href="#tab-mision">
                                    MISIÓN
                                </a>
                                </h4>
                                <div class="panel-collapse collapse in" id="tab-mision">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
                                <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#tab-vision">
                                    NUESTRA VISIÓN
                                </a>
                                </h4>
                                <div class="panel-collapse collapse" id="tab-vision">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <h4 class="panel-heading">
                                <a class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#tab-valores">
                                    NUESTROS VALORES
                                </a>
                                </h4>
                                <div class="panel-collapse collapse" id="tab-valores">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <aside class="col-md-4">
                        <img alt="Nosotros" src="images/nosotros.svg">
                        </img>
                    </aside>
                </div>
            </div>
        </main>
        <footer class="piedepagina p-y-1" role="contentinfo">
            <?php include 'footer.php'?>
        </footer>
        <a class="ir-arriba" data-scroll="" href="#encabezado">
            <i aria-hidden="true" class="fa fa-arrow-circle-up">
            </i>
        </a>
        <!-- Carga de archivos  JS -->
        <script src="js/jquery-3.3.1.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/wow.min.js">
        </script>
        <script src="js/smooth-scroll.min.js">
        </script>
        <script src="js/carga.js">
        </script>
    </body>
</html>