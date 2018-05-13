<?php
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Tienes que logearte primero";
	header('location: login.php');
}
?>

<html lang="es">
<head>
  <?php include 'header.php'?>
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
  <script src="js/moment.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>
  <script src="js/es.js"></script>
  <script>
    jQuery(document).ready(function() {
        $('#CalendarioWeb').fullCalendar({
            businessHours: true,
            defaultView: 'month',
            header:{
                left:'prev,today,next',
                center:'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            businessHours: {
                dow: [ 1, 2, 3, 4, 5 ], // Lunes a Viernes
                start: '08:00',
                end: '16:00',
            },
            dayClick:function(date,jsEvent,view){
                $("#txtId").val("");
                $("#txtFechaIni").val(date.format());
                $("#txtFechaFin").val(date.format());
                $("#txtTitulo").val("");
                $("#txtHoraIni").val("");
                $("#txtHoraFin").val("");
                $("#txtDescripcion").val("");
                $("#modalEventos").modal();
                $("#txtUserId").val(<?php echo $_SESSION['id'] ?>);
            },
                events:'http://localhost/web/events.php',
            eventClick:function(calEvent,jsEvent,view){
                $('#tituloEvento').html(calEvent.title);
            //Mostrar la información del evento en los inputs

                $('#txtDescripcion').val(calEvent.descripcion);
                $('#txtId').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);

                FechaHoraIni = calEvent.start._i.split(" ");
                $('#txtFechaIni').val(FechaHoraIni[0]);
                $('#txtHoraIni').val(FechaHoraIni[1]);

                FechaHoraFin = calEvent.end._i.split(" ");
                $('#txtFechaFin').val(FechaHoraFin[0]);
                $('#txtHoraFin').val(FechaHoraFin[1]);
                $('#modalEventos').modal();
            },
            editable:true,
            eventDrop:function(calEvent){
                $('#txtId').val(calEvent.id);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);

                FechaHoraIni = calEvent.start.format().split("T");
                $('#txtFechaIni').val(FechaHoraIni[0]);
                $('#txtHoraIni').val(FechaHoraIni[1]);

                FechaHoraFin = calEvent.end.format().split("T");
                $('#txtFechaFin').val(FechaHoraFin[0]);
                $('#txtHoraFin').val(FechaHoraFin[1]);

                $('#txtUserId').val(<?php echo $_SESSION['id'] ?>);

                recolectarDatosGUI();
                enviarInformacion('modificar', NuevoEvento, true);
            },
            eventAfterAllRender: function (view) {
                //Use view.intervalStart and view.intervalEnd to find date range of holidays
                //Make ajax call to find holidays in range.
                var diaAñoNuevo = moment('2018-01-01','YYYY-MM-DD');
                var diaReyes = moment('2018-01-06','YYYY-MM-DD');
                var diaViernesSanto = moment('2018-03-30','YYYY-MM-DD');
                var diaTrabajador = moment('2018-05-01','YYYY-MM-DD');
                var diaCanarias = moment('2018-05-31','YYYY-MM-DD');
                var diaAsuncionVirgen = moment('2018-08-15','YYYY-MM-DD');
                var diaHispanidad = moment('2018-10-12','YYYY-MM-DD');
                var diaTodosSantos = moment('2018-11-01','YYYY-MM-DD');
                var diaConstitucion = moment('2018-12-06','YYYY-MM-DD');
                var diaInmaculada = moment('2018-012-08','YYYY-MM-DD');
                var diaNavidad = moment('2018-12-25','YYYY-MM-DD');
                var holidays = [diaAñoNuevo,diaReyes,diaViernesSanto,diaTrabajador,diaCanarias,diaAsuncionVirgen,diaHispanidad,diaTodosSantos,diaConstitucion,diaInmaculada,diaNavidad];
                var holidayMoment;
                for(var i = 0; i < holidays.length; i++) {
                    holidayMoment = holidays[i];
                    if (view.name == 'month') {
                        $("td[data-date=" + holidayMoment.format('YYYY-MM-DD') + "]").addClass('holiday');
                    } else if (view.name =='agendaWeek') {
                        var classNames = $("th:contains(' " + holidayMoment.format('M/D') + "')").attr("class");
                        if (classNames != null) {
                            var classNamesArray = classNames.split(" ");
                            for(var i = 0; i < classNamesArray.length; i++) {
                                if(classNamesArray[i].indexOf('fc-col') > -1) {
                                    $("td." + classNamesArray[i]).addClass('holiday');
                                    break;
                                }
                            }
                        }
                    } else if (view.name == 'agendaDay') {
                        if(holidayMoment.format('YYYY-MM-DD') == $('#CalendarioWeb').fullCalendar('getDate').format('YYYY-MM-DD')) {
                            $("td.fc-col0").addClass('holiday');
                        };
                    }
                }
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
            <input type="hidden" id="txtFechaIni" name="txtFechaIni"/>
            <input type="hidden" id="txtUserId" name="txtUserId"/>

        <div class="container">
            <div class="row">
                <div class="form-group col-md-8">
                    <label>Título:</label>
                    <input type="text" id="txtTitulo" class="form-control" placeholder="Título del evento">
                </div>
                <div class="form-group col-md-4">
                    <label>Hora Inicio:</label>
                    <input type="text" id="txtHoraIni" value="10:30" class="form-control"></input>
                </div>

                <div class="form-group col-md-8">
                    <label>Fecha Fin:</label>
                    <input type="date" id="txtFechaFin" class="form-control" placeholder="Fecha finalización"></input>
                </div>
                <div class="form-group col-md-4">
                    <label>Hora Final:</label>
                    <input type="text" id="txtHoraFin" value="10:30" class="form-control"></input>
                </div>
            </div>
        </div>

            <div class="form-group col-md-12">
                    <label>Descripción:</label>
                    <textarea id="txtDescripcion" rows="3" class="form-control" placeholder="Breve descripción del evento"></textarea>
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
                start:$('#txtFechaIni').val() + " " +$('#txtHoraIni').val(),
                color:$('#txtColor').val(),
                descripcion:$('#txtDescripcion').val(),
                textColor:"#FFFFFF",
                end:$('#txtFechaFin').val() + " " +$('#txtHoraFin').val(),
                userId:$('#txtUserId').val()
            };
        }

        function enviarInformacion(accion, objEvento, modal){
          var string = 'events.php?accion='+accion;
            $.ajax({
                type: 'POST',
                url: string,
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