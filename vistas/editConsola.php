<?php
//include_once("conexion.php");
include_once("../controladores/conexionEspecial.php");
//include_once "../modelos/selectTables.php";

$nombreFijo = $_POST['editar'];
//echo $nombreFijo;

$cuery = "SELECT id_plataforma, numero, serial, nombre FROM consola WHERE id_consola = '$nombreFijo'";
$result = mysqli_query($BD,$cuery);

$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
  $plataforma = $row['id_plataforma'];
  $numero = $row['numero'];
  $serial = $row['serial'];
  $nombre = $row['nombre'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Consola</title>

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
                <h3>Editar Consolas</h3>
              </div>
              <form method="post" role="form" id="quickForm" action="../controladores/act_Consola.php" method="post">

                <center>
                <table class="table table-hover">

                <tr>
                <td><B>Plataforma:</B></td>
                <td> <SELECT NAME="plataforma">
                  <option>...</option>
                <?php
                echo "jaja";
                $q33 = "SELECT nombre FROM plataforma";
                $r33 = mysqli_query($BD,$q33);

                $numrows = mysqli_num_rows($result);

                while($row33 = mysqli_fetch_assoc($r33)){
                  $clave=$row33['nombre'];
                  echo "<option value = '$clave'>".$clave."</option>";
                }

                ?></td>

                <tr>
                <td><B>Numero:</B></td>
                <td> <INPUT TYPE="number" NAME="numero" id="nombre" value="<?php echo $numero; ?>" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Serial:</B></td>
                <td> <INPUT TYPE="text" NAME="serial" id="apellidos" value="<?php echo $serial; ?>" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Nombre:</B></td>
                <td> <INPUT TYPE="text" NAME="nombre" id="fecha_nac" value="<?php echo $nombre; ?>" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=48 required></td>

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
