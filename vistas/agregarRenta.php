<?php
include_once "../modelos/selectTables.php";
include_once "../controladores/ConexionEspecial.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rentas</title>

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
              <a href="../controladores/logout.php" class="nav-link">
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
                <h3>Agregar Renta</h3>
              </div>
              <form role="form" id="quickForm" action="../controladores/addRenta.php" method="post">

                <center>
                <table class="table table-hover">

                <tr>
                <td><B>Fecha:</B></td>
                <td> <INPUT TYPE="date" NAME="fecha" id="nombre" value="" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Hora:</B></td>
                <td> <INPUT TYPE="time" NAME="hora" id="apellidos" value="" placeholder="HH:MM:SS" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Gamers:</B></td>
                <td> <SELECT NAME="gamer">
                  <option>...</option>
                <?php
                $cueryGamers = "SELECT id_gamer as id, nombre FROM gamers ORDER BY `id` ASC";
                $resultGamers = mysqli_query($BD,$cueryGamers);

                while($rowGamers = mysqli_fetch_assoc($resultGamers)){
                  $nombreGamers=$rowGamers['nombre'];
                  $idGamers = $rowGamers['id'];
                  echo $nombreGamers;
                  echo "<option value = '$idGamers'>".$nombreGamers."</option>";
                }

                ?></td>

                <tr>
                <td><B>Accesorios:</B></td>
                <td> <SELECT NAME="accesorio">
                  <option>...</option>
                <?php
                $cueryAccesorios = "SELECT id_accesorio as id, nombre FROM accesorio ORDER BY `id` ASC";
                $resultAccesorios = mysqli_query($BD,$cueryAccesorios);

                while($rowAccesorios = mysqli_fetch_assoc($resultAccesorios)){
                  $nombreAccesorios=$rowAccesorios['nombre'];
                  $idAccesorios = $rowAccesorios['id'];
                  echo $nombreAccesorios;
                  echo "<option value = '$idAccesorios'>".$nombreAccesorios."</option>";
                }

                ?></td>

                <tr>
                <td><B>Juego:</B></td>
                <td> <SELECT NAME="juego">
                  <option>...</option>
                <?php
                $cueryJuego = "SELECT id_juego as id, nombre FROM juego ORDER BY `id` ASC";
                $resultJuego = mysqli_query($BD,$cueryJuego);

                while($rowJuego = mysqli_fetch_assoc($resultJuego)){
                  $nombreJuego=$rowJuego['nombre'];
                  $idJuego = $rowJuego['id'];
                  echo $nombreJuego;
                  echo "<option value = '$idJuego'>".$nombreJuego."</option>";
                }

                ?></td>

                <tr>
                <td><B>Consola:</B></td>
                <td> <SELECT NAME="consola">
                  <option>...</option>
                <?php
                $cueryConsola = "SELECT c.id_consola as id, p.nombre as nombre FROM consola c INNER JOIN plataforma p ON c.id_plataforma = p.id_plataforma ORDER BY `id` ASC";
                $resultConsola = mysqli_query($BD,$cueryConsola);

                while($rowConsola = mysqli_fetch_assoc($resultConsola)){
                  $nombreConsola=$rowConsola['nombre'];
                  $idConsola = $rowConsola['id'];
                  echo "<option value = '$idConsola'>".$nombreConsola."</option>";
                }

                ?></td>

                <tr>
                <td><B>Horas:</B></td>
                <td> <INPUT TYPE="number" NAME="horas" id="apellidos" min="1" max="99" value="" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                  <td><B>Cantidad Consolas</B></td>
                  <td><INPUT type="number" name="cantidadConsolas" min="1" max="99" required></td>
                </tr>

                <tr>
                  <td><B>Cantidad Accesorios</B></td>
                  <td><INPUT type="number" name="cantidadAccesorios" min="1" max="99" ></td>
                </tr>

                <tr>

                <td ALIGN=CENTER colspan="2">
                <INPUT NAME = "agregar" TYPE="submit" VALUE="Agregar Renta">

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
  <script type="text/javascript" src="../../javascript/javascript.js"></script>

</body>
</html>
