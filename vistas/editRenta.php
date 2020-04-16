<?php
//include_once("conexion.php");
include_once("../controladores/conexionEspecial.php");
//include_once "../modelos/selectTables.php";

$nombreFijo = $_POST['editar'];
//echo $nombreFijo;

$cuery = "SELECT fecha, hora FROM renta WHERE id_renta = '$nombreFijo'";
$result = mysqli_query($BD,$cuery);

$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
  $fecha = $row['fecha'];
  $hora = $row['hora'];

  //echo $nombre;
  //echo $apellidos;
  //echo $fecha_nac;
  //echo $telefono;
  //echo $correo;
  //echo $usuario;
  //echo $redes;
  //echo $genero;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gamers</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../vistas/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="admin_Inicio.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inicio</p>
              </a>
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
  <div class="content-wrapper">
    <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3>Editar Renta</h3>
              </div>
              <form role="form" id="quickForm" action="../controladores/act_Renta.php" method="post">

                <center>
                <table class="table table-hover">
                
                <tr>
                <td><B>Fecha:</B></td>
                <td> <INPUT TYPE="date" NAME="fecha" id="nombre" value="<?php echo $fecha; ?>" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Hora:</B></td>
                <td> <INPUT TYPE="time" NAME="hora" id="apellidos" value="<?php echo $hora; ?>" placeholder="HH:MM:SS" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Gamer:</B></td>
                <td><select name="gamer">
                    <option id="0">...</option>
                    <option id="1" value="Erick">Erick</option>
                    <option id="2" value="Alfonso">Alfonso</option>
                </td>

                <tr>
                <td><B>Accesorio:</B></td>
                <td><select name="accesorio">
                    <option id="0">...</option>
                    <option id="1" value="Diadema">Diadema</option>
                    <option id="2" value="ControlExtra">Control Extra</option>
                </td>

                <tr>
                <td><B>Juego:</B></td>
                <td><select name="juego">
                    <option id="0">...</option>
                    <option id="1" value="Call_Of_Duty">Call Of Duty</option>
                    <option id="2" value="Infamous_Second_Son">Infamous Second Son</option>
                </td>

                <tr>
                <td><B>Consola:</B></td>
                <td><select name="consola">
                    <option id="0">...</option>
                    <option id="1" value="Xbox_One_S">Xbox One S</option>
                    <option id="2" value="PlayStation_4">PlayStation 4</option>
                </td>

                <tr>

                <td ALIGN=CENTER colspan="2">
                <!--<INPUT NAME = "agregar" TYPE="submit" VALUE="Editar Renta">-->
                <button class="btn btn-success" type="submit" name="editar"
            value="<?php echo htmlspecialchars($nombreFijo); ?>">Editar</button>

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
