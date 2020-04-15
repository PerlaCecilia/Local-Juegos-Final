<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;
  
  $juego = $_POST['juego'];
  $consola = $_POST['consola'];

  if($juego == 'Call_Of_Duty'){
        $juegoreal = '1';
      }else{
        $juegoreal = '2';
      }

      if($consola == 'Xbox'){
        $consolareal = '1';
      }else{
        $consolareal = '2';
      }

  $cuery = "UPDATE instalado SET id_juego = '$juegoreal', id_consola = '$consolareal' WHERE id_instalado = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cInstalado.php');
  }
?>
