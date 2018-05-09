<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Tienes que logearte primero";
	header('location: login.php');
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
  <section class="bienvenidos" style="height: 30vh;">
    <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
      <div class="container">
        <a href="index.php" class="logo">
          <img src="images/logoMYT.svg" alt="Logo del sitio">
        </a>
        <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
          <i class="fa fa-bars" aria-hidden="true"></i></button>
          <nav id="menu-principal" class="collapse">
            <ul>
              <li class="active"><a href="loged.php">Perfil</a></li>
              <li><a href="calendario.php">Calendario</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="texto-encabezado text-xs-center">
        <div class="container">
          <h1 class="display-4 wow bounceIn">Perfil</h1>
          <p class="wow bounceIn" data-wow-delay=".3s">Perfil de usuario</p>
        </div>
      </div>
    </section>
    <section class="ruta p-y-1">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>


    <div class="container" style="text-align: center; height: 70vh;">
      <div class="row">
       <div class="col-md-7" style ="margin: 5rem auto; border: 0.3rem solid #01A0AD; padding: 2rem; border-radius: 30px;">

         <div class="col-sm-12">
           <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

            <!--Upload Image Js And Css-->
          </div>
          <br>
          <!-- /input-group -->
        </div>
        <div class="col-sm-12">
          <h4 style="color:#00b1b1;"><?php echo $_SESSION['username']; ?></h4>
        </div>
        <div class="clearfix"></div>
        <hr style="margin:5px 0 5px 0;">

        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-xs-6 title" >Nombre: <?php echo $_SESSION['name']; ?></div>
            <div class="clearfix"></div>

            <div class="col-sm-12 col-xs-6 title " >Apellidos: <?php echo $_SESSION['surname']; ?></div>
            <div class="clearfix"></div>

            <div class="col-sm-12 col-xs-6 title " >Fecha de nacimiento: <?php echo $_SESSION['birthday']; ?></div>
            <div class="clearfix"></div>

            <div class="col-sm-12 col-xs-6 title " >Email: <?php echo $_SESSION['email']; ?></div>
            <div class="clearfix"></div>

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
</body>
</html>