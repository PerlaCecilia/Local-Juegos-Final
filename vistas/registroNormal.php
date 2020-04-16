<?php
include_once "../modelos/selectTables.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
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
              <a href="../index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inicio</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="iniciar_Sesion.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Iniciar sesión</p>
              </a>
            </li>
          </ul>
        </nav>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registrarse</p>
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
                <h3>Ingresa tus datos</h3>
              </div>
              <form role="form" id="quickForm" action="../controladores/addNormal.php" method="post">

                <center>
                <table class="table table-hover">
                <tr>
                <td><B>Nombre:</B></td>
                <td> <INPUT TYPE="text" NAME="nombre" id="nombre" value="" SIZE=40 MAXLENGTH=50 required></td>

                <tr>
                <td><B>Apellidos:</B></td>
                <td> <INPUT TYPE="text" NAME="apellidos" id="apellidos" value="" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Fecha de Nacimiento:</B></td>
                <td> <INPUT TYPE="date" NAME="fecha_nac" id="fecha_nac" value="" placeholder="AAAA-MM-DD" SIZE=40 MAXLENGTH=48 required></td>

                <tr>
                <td><B>Genero:</B></td>
                <td><select name="genero">
                    <option id="0">...</option>
                    <option id="1" value="Hombre">Hombre</option>
                    <option id="2" value="Mujer">Mujer</option>
                </td>

                <tr>
                <td><B>Telefono:</B></td>
                <td> <INPUT TYPE="text" NAME="telefono" id="telefono" value="" SIZE=40 required></td>

                <tr>
                <td><B>Email:</B></td>
                <td> <INPUT TYPE="email" NAME="correo" id="correo" value="" SIZE=40 required></td>

                <tr>
                <td><B>Gamer:</B></td>
                <td> <INPUT TYPE="text" NAME="usuario" id="usuario" value="" SIZE=40 required></td>

                <tr>
                <td><B>Contraseña:</B></td>
                <td> <INPUT TYPE="password" NAME="contra" id="usuario" value="" SIZE=40 required></td>

                <tr>
                <td><B>Facebook:</B></td>
                <td> <INPUT TYPE="text" NAME="facebook" id="redes" value="" SIZE=40></td>

                <tr>
                <td><B>Twitch:</B></td>
                <td> <INPUT TYPE="text" NAME="twitch" id="redes" value="" SIZE=40></td>

                <tr>
                <td><B>Mixer:</B></td>
                <td> <INPUT TYPE="text" NAME="mixer" id="redes" value="" SIZE=40></td>

                <tr>
                <td><B>Youtube:</B></td>
                <td> <INPUT TYPE="text" NAME="youtube" id="redes" value="" SIZE=40></td>

                <tr>

                <td ALIGN=CENTER colspan="2">
                <INPUT NAME = "agregar" TYPE="submit" VALUE="Agregar Gamer">

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
