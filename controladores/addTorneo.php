<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
include_once("conexion.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['nombre'])) {

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

}

//Sentencia donde indico cual tabla va a tener los nuevos valores
$sentencia=$BD->prepare("INSERT INTO torneo (nombre, juego, fecha, hora, modalidad, forma, max_jugadores, descripcion, estatus)
                         VALUES (?,?,?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$nombre, $juegoreal, $fecha, $hora, $modalidadreal, $formareal, $jugadores, $descripcion, $estatusreal]);
if ($resultado) {
    //Redirecciona en caso de que se añada correctamente
       phpAlert("Registro añadido correctamente");
       header('Location: ../vistas/admin_cTorneo.php');
  }else{
      //Mensaje en el caso contrario
      phpAlert("Error");
      header('Location: addTorneo.php');
  }

?>
