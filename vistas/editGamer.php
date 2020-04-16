<?php
//include_once("conexion.php");
include_once("../controladores/conexionEspecial.php");
//include_once "../modelos/selectTables.php";

$nombreFijo = $_POST['editar'];
//echo $nombreFijo;

$cuery = "SELECT nombre, apellido, fecha_nac, genero, telefono, email, gamertag, contra, facebook, twitch, mixer, youtube FROM gamers WHERE id_gamer = '$nombreFijo'";
$result = mysqli_query($BD,$cuery);

$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
  $nombre = $row['nombre'];
  $apellidos = $row['apellido'];
  $fecha_nac = $row['fecha_nac'];
  $genero = $row['genero'];
  $telefono = $row['telefono'];
  $correo = $row['email'];
  $usuario = $row['gamertag'];
  $contra = $row['contra'];
  $facebook = $row['facebook'];
  $twitch = $row['twitch'];
  $mixer = $row['mixer'];
  $youtube = $row['youtube'];

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
  <div align="left" class="content-wrapper">
    <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3>Editar Gamers</h3>
              </div>
              <form method="post" role="form" id="quickForm" action="../controladores/act_Gamer.php" method="post">

                <center>
                <table class="table table-hover">
                <tr>
                <td><B>Nombre:</B></td>
                <td> <INPUT TYPE="text" NAME="nombre" id="nombre" value="<?php echo $nombre; ?>" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Apellidos:</B></td>
                <td> <INPUT TYPE="text" NAME="apellidos" id="apellidos" value="<?php echo $apellidos; ?>" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Fecha de Nacimiento:</B></td>
                <td> <INPUT TYPE="date" NAME="fecha_nac" id="fecha_nac" value="<?php echo $fecha_nac; ?>" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Genero:</B></td>
                <td><select name="genero">
                    <option>...</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </td>

                <tr>
                <td><B>Telefono:</B></td>
                <td> <INPUT TYPE="text" NAME="telefono" id="telefono" value="<?php echo $telefono; ?>" SIZE=40 required></td>

                <tr>
                <td><B>Correo:</B></td>
                <td> <INPUT TYPE="email" NAME="correo" id="correo" value="<?php echo $correo; ?>" SIZE=40 required></td>

                <tr>
                <td><B>Usuario:</B></td>
                <td> <INPUT TYPE="text" NAME="usuario" id="usuario" value="<?php echo $usuario; ?>" SIZE=40 required></td>

                <tr>
                <td><B>Facebook:</B></td>
                <td> <INPUT TYPE="text" NAME="facebook" id="redes" value="<?php echo $facebook; ?>" SIZE=40></td>

                <tr>
                <td><B>Twitch:</B></td>
                <td> <INPUT TYPE="text" NAME="twitch" id="redes" value="<?php echo $twitch; ?>" SIZE=40></td>

                <tr>
                <td><B>Mixer:</B></td>
                <td> <INPUT TYPE="text" NAME="mixer" id="redes" value="<?php echo $mixer; ?>" SIZE=40></td>

                <tr>
                <td><B>Youtube:</B></td>
                <td> <INPUT TYPE="text" NAME="youtube" id="redes" value="<?php echo $youtube; ?>" SIZE=40></td>

                <tr>
                <td><B>Contraseña:</B></td>
                <td> <INPUT TYPE="text" NAME="contra" id="co" value="<?php echo $contra; ?>" SIZE=40 required></td>

                <tr>

                <td ALIGN=CENTER colspan="2">
                <!--<INPUT NAME = "agregar" TYPE="submit" VALUE="Agregar Administrador"></INPUT>-->
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
