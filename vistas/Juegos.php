<?php


//session_start();
/*if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
  header('Location: ../index.php');
}*/

include_once '../modelos/selectTables.php';
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Juegos</title>

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
            <a href="Consolas.php" class="nav-link">
              <i class="fa fa-desktop"></i>
              <p>Consolas</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="Juegos.php" class="nav-link">
              <i class="fa fa-gamepad"></i>
              <p>Juegos</p>
            </a>
          </li>
        </ul>
      </nav>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="Torneos.php" class="nav-link">
              <i class="fas fa-sign-in-alt nav-icon"></i>
              <p>Torneos</p>
            </a>
          </li>
        </ul>
      </nav>

        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="registroNormal.php" class="nav-link">
              <i class="far fa-file nav-icon"></i>
              <p>Registrarse</p>
            </a>
          </li>
        </ul>
      </nav>
        <!-- /.sidebar-menu -->
      
      <!-- /.sidebar -->
    </aside>



      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div style="width: 1365px; padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px;">
              <div class="card card-primary">
                <div class="card-header" style="background-color:#F04D43;">
                  <h3>Juegos</h3>
                </div>

                

                <form class="" action="editJuego.php" method="post">

                  <!--nombre, usuario, correo-->
                  <div class="crudAdmin" align="center">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Imagen</th>
                          <th>Nombre</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php foreach ($resultadoNormalJuego as $resultadoNormalJuego){ ?>
                        <?php $identificador = $resultadoNormalJuego -> id_juego ?>
                        <tr>

                        <td><?php echo $resultadoNormalJuego -> id_juego ?></td>
                        <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $resultadoNormalJuego -> imagen ).'" style="height: 120px; width: 75px;"/>'; ?></td>
                        <td><?php echo $resultadoNormalJuego -> nombre ?></td>
                        

                        

                        </tr>

                        <?php } ?>

                      </tbody>
                    </table>
                  </div>

                </form>


              
            </div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </section>
  </div>



  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
    </html>
