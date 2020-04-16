<?php

/*session_start();
if (!isset($_SESSION['sesion']) || $_SESSION['tipo'] != 'admin') {
  header('Location: ../index.php');
}*/

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="vistas/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="vistas/css/adminlte.min.css">
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #3D404C;">


  <!-- Main Sidebar Container -->
  <header class="sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar" style="display: flex;">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <center>
              <a href="index.php" class="nav-link">
              <img src="vistas/img/GAMES-CLUB.png">
            </a>
            </center>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="vistas/Consolas.php" class="nav-link">
              <i class="fa fa-desktop"></i>
              <p>Consolas</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="vistas/Juegos.php" class="nav-link">
              <i class="fa fa-gamepad"></i>
              <p>Juegos</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="vistas/Torneos.php" class="nav-link">
              <i class="fas fa-sign-in-alt nav-icon"></i>
              <p>Torneos</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="vistas/iniciar_Sesion.php" class="nav-link">
              <i class="fas fa-sign-in-alt nav-icon"></i>
              <p>Iniciar sesión</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="vistas/registroNormal.php" class="nav-link">
              <i class="far fa-file nav-icon"></i>
              <p>Registrarse</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </header>


  
    <section class="content" style="color: #ffffff">
      <div class="container-fluid">

        <div class="row" style="background-image: url('vistas/img/gamestore.jpg');">
           <div style="width: 1365px; padding-top: 80px; padding-bottom: 100px; padding-left: 20px; padding-right: 20px;">
           <div> 
              <center>
              <h3>#1 Gaming center en México</h3>
              <h1 style="font-size: 80px; font-weight: bold">THE PLACE TO PLAY</h1>
              <h4>Una nueva forma de entretenimiento, la introducción<br> de los videojuegos como nunca antes lo has experimentado.</h4>
              </center>
           </div>
           </div>
        </div>

        <div class="row">
           <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; background-color:#ffffff">
           <div style="border: 1px solid white; border-radius: 5px; background-color:#3D404C; padding-top: 20px; padding-bottom:20px;"> 
            <center>
            <h4>ESTE GRAN ESPECTÁCULO INCLUYE</h4><br>

            <div>
            <div style="display: flex;">

            <div style="padding-bottom: 20px;  padding-left: 150px; padding-right: 20px; ">
              <div style="border-radius: 5px; background-color:#F04D43; width: 200px; height: 100px">
              <i class="fas fa-users" style="font-size:30px"></i>
              <p>Juegos en PC, Xbox One,<br> PS4 y Nintendo Switch</p>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #FFCB0A; width: 200px; height: 100px">
              <i class="fa fa-gamepad" style="font-size:30px"></i>
              <p>Cientos de títulos<br> en videojuegos</p>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #11ACE6; width: 200px; height: 100px">
              <i class="fa fa-wifi" style="font-size:30px"></i>
              <p>Conexión a internet <br> de alta velocidad</p>
              </div>
            </div>

            </div>


            <div style="display: flex;">

            <div style="padding-bottom: 20px;  padding-left: 150px; padding-right: 20px;">
              <div style="border-radius: 5px; background-color:#F04D43; width: 200px; height:100px">
              <i class="fa fa-birthday-cake" style="font-size:30px"></i>
              <p>Fiestas y eventos</p>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #FFCB0A; width: 200px; height: 100px">
              <i class="fas fa-hamburger" style="font-size:30px"></i>
              <p>Servicio gourmet de<br> alimentos y bebidas</p>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #11ACE6; width: 200px; height: 100px">
              <i class="fa fa-trophy" style="font-size:30px"></i>
              <p>Torneos exclusivos</p>
              </div>
            </div>

            </div>
            </div>



            </center>
           </div>
           </div>
        </div>


        <div class="row" style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px;">
            <div>

              <div>
                <center>
                  <h4>GALERIA:</h4>
                </center>
                
                <div id="galeria" style="width: 100%;float: left;display: flex">
                  <div id="leftdiv" style="float: left;width: 500px;height: 200px;">
                    <img style="height: 200px;width: 500px" src="vistas/img/galeria.jpg">  
                  </div>

                  <div id="rightdiv" style="float: left;width: 800px;height: 200px;padding: 20px; text-align: left">
                    <p>No tengo consolas porque no estaba acostumbrada a jugar mucho.<br>Ahora, Arena se ha convertido en mi lugar favorito para escapar los fines de semana.</p>
                    <b>Paulina, 21 años</b>
                  </div>
                </div>

                <div id="galeria" style="width: 100%;float: left;display: flex">
                  <div id="leftdiv" style="float: left;width: 800px;height: 200px;padding: 20px; text-align: right">
                    <p>Los chicos de Arena me ayudaron a conseguir los logros<br>que me faltaban en Fortnite; me encanta este lugar.</p>
                    <b>Marcos, 14 años</b>
                  </div>

                  <div id="rightdiv" style="float: left;border: 1px solid blue;width: 500px;height: 200px;">
                    <img style="height: 200px;width: 500px" src="vistas/img/galeria1.jpg">  
                  </div>
                </div>

              </div>

            </div>
        </div>


        <div class="row" style="background-image: url('vistas/img/background.png');">
           <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px">
           <div style="border: 1px solid white; border-radius: 5px">
            <center>
              <h4>CONTACTO:</h4>
              <a href="tel:+62896706255135">+62-896-7062-55135</a><br>
              <a href = "mailto: gamesclub@gmail.com">gamesclub@gmail.com</a>
              <p>Calle Pamoranes 349, Revolución Verde, 87024 Cd Victoria, Tamps.</p>

              <div id="demoMap" style="height:250px"></div>
                  <script src="OpenLayers.js"></script>
                  <script>

                      var lat = 23.747653;
                      var lon = -99.136912;
                      var zoom = 16;

                      var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
                      var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
                      var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

                      map = new OpenLayers.Map("demoMap");
                      var mapnik = new OpenLayers.Layer.OSM();
                      map.addLayer(mapnik);

                      var markers = new OpenLayers.Layer.Markers( "Markers" );
                      map.addLayer(markers);
                      markers.addMarker(new OpenLayers.Marker(position));

                      map.setCenter(position, zoom);
                  </script>
                  </center>
              </div>

              <center>
                <h4>REDES SOCIALES:</h4>
                <button style='font-size:24px; background-color:transparent; border: none;color:white'><i class='fab fa-facebook'></i></button>
                <button style='font-size:24px; background-color:transparent; border: none;color:white'><i class='fab fa-twitter'></i></button>
                <button style='font-size:24px; background-color:transparent; border: none;color:white'><i class='fab fa-instagram'></i></button>
              </center>
              
           </div>
           </div>
        </div>
    </section>
  




<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
