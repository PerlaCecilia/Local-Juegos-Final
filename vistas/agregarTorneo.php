<?php
include_once "../modelos/selectTables.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Torneos</title>

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
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #3D404C">
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 622px; width: 250px">
      <!-- Sidebar -->
      <div class="sidebar" style="height: 622px; width: 250px; display: block;">

        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <center>
              <a href="admin_Inicio.php" class="nav-link">
              <img src="img/GAMES-CLUB.png">
            </a>
            </center>
          </li>
        </ul>
      </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cGamer.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gamers</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cJuegos.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Juegos</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cConsolas.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consolas</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cAccesorio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Accesorios</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cInstalado.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Juegos Instalados</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cTorneo.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Torneos</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cDetalles.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Detalles</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cPremio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Premios</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_cRenta.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Rentas</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cerrar sesion</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #3D404C;">
    <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header" style="background-color:#F04D43;">
                <h3>Agregar Torneo</h3>
              </div>
              <form role="form" id="quickForm" action="../controladores/addTorneo.php" method="post">

                <center>
                <table class="table table-hover">
                <tr>
                <td><B>Nombre Del Torneo:</B></td>
                <td> <INPUT TYPE="text" NAME="nombre" id="nombre" value="" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Juego:</B></td>
                <td><select name="juego">
                    <option id="0">...</option>
                    <option id="1" value="CallOfDuty">Call Of Duty</option>
                    <option id="2" value="Infamous">Infamous Second Son</option>
                </td>

                <tr>
                <td><B>Fecha:</B></td>
                <td> <INPUT TYPE="date" NAME="fecha" id="fecha_nac" value="" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Hora:</B></td>
                <td> <INPUT TYPE="time" NAME="hora" id="telefono" value="" placeholder="HH:MM:SS" SIZE=40 required></td>

                <tr>
                <td><B>Modalidad:</B></td>
                <td><select name="modalidad">
                    <option id="0">...</option>
                    <option id="1" value="Single">Single</option>
                    <option id="2" value="Duo">Duo</option>
                    <option id="2" value="Trio">Trio</option>
                </td>

                <tr>
                <td><B>Forma:</B></td>
                <td><select name="forma">
                    <option id="0">...</option>
                    <option id="1" value="Presencial">Presencial</option>
                    <option id="2" value="Linea">Linea</option>
                </td>

                <tr>
                <td><B>Jugadores:</B></td>
                <td> <INPUT TYPE="number" NAME="jugadores" id="correo" value="" SIZE=40 required></td>

                <tr>
                <td><B>Descripcion:</B></td>
                <td> <INPUT TYPE="text" NAME="descripcion" id="usuario" value="" SIZE=40 required></td>

                <tr>
                <td><B>Estatus:</B></td>
                <td><select name="estatus">
                    <option id="0">...</option>
                    <option id="1" value="Espera">Espera</option>
                    <option id="2" value="EnCurso">En Curso</option>
                    <option value="Finalizado">Finalizado</option>
                </td>

                <tr>

                <td ALIGN=CENTER colspan="2">
                <INPUT NAME = "agregar" TYPE="submit" VALUE="Agregar Torneo">

                </table>
                </center>

              </form>
            </div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
      </div>
    </section>
  </div>


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
  <script src="../../dist/js/adminlte.min.js"></script>
  <script src="../../dist/js/demo.js"></script>

</body>
</html>
