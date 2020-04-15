<?php

session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'gamer') {
  header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gamer</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #3D404C;">


  <!-- Main Sidebar Container -->
  <aside class="sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar" style="display: flex;">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <center>
              <a href="gamer_Inicio.php" class="nav-link">
              <img src="img/GAMES-CLUB.png">
            </a>
            </center>
          </li>
        </ul>
      </nav>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="gamer_Rentas.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Mis Rentas</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="gamer_Torneo.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Torneos</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../controladores/logout.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Cerrar Sesión</p>
            </a>
          </li>
        </ul>
      </nav>

      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



     <section class="content" style="color: #ffffff">
      <div class="container-fluid">

        <div class="row">
           <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px;">
           <div> 
              <center>
              <h3>#1 Gaming center en México</h3>
              <h1 style="font-size: 80px; font-weight: bold">THE PLACE TO PLAY</h1>
              <h4>Una nueva forma de entretenimiento, la introducción de los videojuegos como nunca antes lo has experimentado.</h4>
              </center>
           </div>
           </div>
        </div>

        <div class="row">
           <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; background-color:#ffffff">
           <div style="border: 1px solid white; border-radius: 5px; background-color:#3D404C"> 
            <center>
            <h4>ESTE GRAN ESPECTÁCULO INCLUYE</h4>

            <div style="display: flex;">


            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px;">
              <div style="border-radius: 5px; background-color:#F04D43; width: 150px; height: 80px">
              <i class="fas fa-users"><br>Torneos <br>exclusivos</i>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #FFCB0A; width: 150px; height: 80px">
              <i class="fa fa-gamepad"><br> Cientos de títulos <br>en videojuegos</i>
              </div>
            </div>

            <div style="padding-bottom: 20px;  padding-left: 200px; padding-right: 20px">
              <div style="border-radius: 5px; background-color: #11ACE6; width: 150px; height: 80px">
              <i class="fa fa-wifi"><br> Conexión a internet <br> de alta velocidad</i>
              </div>
            </div>

            </div>



            </center>
           </div>
           </div>
        </div>

        <div class="row" style="background-image: url('vistas/img/background.png');">
           <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px">
           <div style="border: 1px solid white; border-radius: 5px">
            <center>
              <h4>Conctacto:</h4>
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

              </div>

              <p></p>
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
