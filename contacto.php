<?php
$msg = "";

if (isset($_POST['submit'])) {
	require 'phpmailer/PHPMailerAutoload.php';

	function contactEmail($to, $from, $fromName, $body) {

		$mail = new PHPMailer();
		$mail->isSMTP(true); // use SMTP
		$mail->Host = "smtp.gmail.com"; // SMTP host
		$mail->SMTPSecure = "ssl";
		$mail->Port = 465; // set the SMTP port
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->isHTML(true);
		$mail->Username = "manageppp@gmail.com"; // SMTP  username
		$mail->Password = "Manage123"; // SMTP password

		$mail->setFrom($from, $fromName);
		$mail->Subject = $from;
		$mail->MsgHTML($body);
		$mail->addAddress($to);

		return $mail->send();
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['message'];

	if (contactEmail('manageppp@gmail.com', $email, $name, $text)) {
		$msg = 'Mensaje enviado';
	} else {
		$msg = 'Por favor, inténtelo de nuevo.';
	}

}

?>

<html lang="es">
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
                            <li class="active"><a href="contacto.php">Contacto</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="texto-encabezado text-xs-center">
                <div class="container">
                    <h1 class="display-4 wow bounceIn">Contacto</h1>
                    <p class="wow bounceIn" data-wow-delay=".3s">¿En qué podemos ayudarle?</p>
                </div>
            </div>
        </section>
        <section class="ruta p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-right">
                        <a href="index.php">Inicio</a> » Contacto
                    </div>
                </div>
            </div>
        </section>
        <main class="p-y-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="m-b-2">Formulario de contacto</h2>
                        <form method="post" action="contacto.php">
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label">Nombre</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                                <?php echo $msg ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h3 class="m-b-2">Detalles de contacto</h3>
                        <p>Dirección: Av. Carlos V</p>
                        <p>Correo electrónico: manageppp@gmail.com</p>
                        <p>Teléfono: 699-999-999</p>
                    </div>
                </div>
            </div>
        </main>
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
        <script src="js/tether.min.js"></script>
        <script type="text/javascript">
        $(function() {
        $('[data-toggle="tooltip"]').tooltip()
        })
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/carga.js"></script>
    </body>
</html>