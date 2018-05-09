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
  <link href="css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
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
              <li><a href="loged.php">Perfil</a></li>
              <li class="active"><a href="calendario.php">Calendario</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="texto-encabezado text-xs-center">
        <div class="container">
          <h1 class="display-4 wow bounceIn">Calendario</h1>
          <p class="wow bounceIn" data-wow-delay=".3s">Eventos establecidos</p>
        </div>
      </div>
    </section>
    <section class="ruta p-y-1">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>


    <div class="container">
      <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style ="margin: 2rem auto; padding: 2rem;">
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col-sm-1"></div>
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
  <script src="js/moment.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>
  <script src="js/es.js"></script>

  <script>
    jQuery(document).ready(function() {
        $('#CalendarioWeb').fullCalendar({
            header:{
                left:'today,prev,next,Miboton',
                center:'title',
                right: 'month,agendaWeek,agendaDay'
            },
            dayClick:function(date,jsEvent,view){
                $("#txtId").val("");
                $("#txtFecha").val(date.format());
                $("#txtTitulo").val("");
                $("#txtHora").val("");
                $("#txtDescripcion").val("");
                $("#modalEventos").modal();
            },
                events:'http://localhost/web/events.php',
            eventClick:function(calEvent,jsEvent,view){

                $('#tituloEvento').html(calEvent.title);
            //Mostrar la información del evento en los inputs
                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtId').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);

                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);
                $('#modalEventos').modal();
            },
            editable:true,
            eventDrop:function(calEvent){
                $('#txtId').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                FechaHora = calEvent.start.format().split("T");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);

                recolectarDatosGUI();
                enviarInformacion('modificar', NuevoEvento, true);
            }
        });
    });
  </script>

    <!-- Modal (Agregar, Modificar, Eliminar)-->
  <div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tituloEvento"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" id="txtId" name="txtId"/>
            <input type="hidden" id="txtFecha" name="txtFecha" />

        <div class="container">
            <div class="row">
                <div class="form-group col-md-8">
                    <label>Título:</label>
                    <input type="text" id="txtTitulo" class="form-control" placeholder="Título del evento">
                </div>

                <div class="form-group col-md-4">
                    <label>Hora:</label>
                    <input type="text" id="txtHora" value="10:30" class="form-control"></input>
                </div>
            </div>
        </div>

            <div class="form-group col-md-12">
                    <label>Descripción:</label>
                    <textarea id="txtDescripcion" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-12">
                    <label>Color:</label>
                    <input type="color" value="#ff0000" id="txtColor" style="width: 100%;"/>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-success">Modificar</button>
            <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <script>
        var NuevoEvento;

        $('#btnAgregar').click(function(){
            recolectarDatosGUI();
            enviarInformacion('agregar', NuevoEvento);
        });

        $('#btnModificar').click(function(){
            recolectarDatosGUI();
            enviarInformacion('modificar', NuevoEvento);
        });

        $('#btnEliminar').click(function(){
            recolectarDatosGUI();
            enviarInformacion('eliminar', NuevoEvento);
        });

        function recolectarDatosGUI(){
            NuevoEvento = {
                id:$('#txtId').val(),
                title:$('#txtTitulo').val(),
                start:$('#txtFecha').val() + " " +$('#txtHora').val(),
                color:$('#txtColor').val(),
                descripcion:$('#txtDescripcion').val(),
                textColor:"#FFFFFF",
                end:$('#txtFecha').val() + " " +$('#txtHora').val()
            };
        }

        function enviarInformacion(accion, objEvento, modal){
            $.ajax({
                type: 'POST',
                url: 'events.php?accion='+accion,
                data: objEvento,
                success: function(msg){
                    if(msg){
                        $('#CalendarioWeb').fullCalendar('refetchEvents');
                        if(!modal){
                            $('#modalEventos').modal('toggle');
                        }

                    }

                },
                error:function(){
                    alert("Ha ocurrido un error ...");
                }
            });
        }


    </script>

</body>
</html>