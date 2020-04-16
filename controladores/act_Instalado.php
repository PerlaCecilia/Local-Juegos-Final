<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;
  
  $juego = $_POST['juego'];
  $consola = $_POST['consola'];

  $cuery = "UPDATE instalado SET id_juego = '$juego', id_consola = '$consola' WHERE id_instalado = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cInstalado.php');
  }
?>
