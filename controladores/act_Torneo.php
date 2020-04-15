<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
//include_once("conexion.php");
include_once("../controladores/conexionEspecial.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables

      $nombreFijo = $_POST['editar'];
      echo $nombreFijo;

      $nombre = $_POST['nombre'];
      $juego = $_POST['juego'];
      $fecha = $_POST['fecha'];
      $hora = $_POST['hora'];
      $modalidad = $_POST['modalidad'];
      $forma = $_POST['forma'];
      $jugadores = $_POST['jugadores'];
      $descripcion = $_POST['descripcion'];
      $estatus = $_POST['estatus'];

      if($juego == 'Infamous'){
        $juegoreal = '2';
      }else{
        $juegoreal = '1';
      }

      if($modalidad == 'Single'){
        $modalidadreal = '1';
      }elseif($modalidad == 'Duo'){
        $modalidadreal = '2';
      }else{
        $modalidadreal = '3';
      }

      if($forma == 'Presencial'){
        $formareal = '1';
      }else{
        $formareal = '2';
      }

      if($estatus == 'EnCurso'){
        $estatusreal = '1';
      }elseif($estatus == 'Espera'){
        $estatusreal = '3';
      }else{
        $estatusreal = '2';
      }

  $cuery = "UPDATE torneo SET nombre = '$nombre', juego = '$juegoreal', fecha = '$fecha', hora = '$hora', modalidad = '$modalidadreal', forma = '$formareal', max_jugadores = '$jugadores', descripcion = '$descripcion', estatus = '$estatusreal' WHERE id_torneo = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cTorneo.php');
  }
?>