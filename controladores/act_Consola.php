<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;
  
  $newplataforma = $_POST['plataforma'];
  $newnumero = $_POST['numero'];
  $newserial = $_POST['serial'];
  $newnombre = $_POST['nombre'];

  if ($plataforma == 'Xbox') {
      	$plataformareal = 1;
      }else{
      	$plataformareal = 2;
      }

  $cuery = "UPDATE consola SET id_plataforma = '$plataformareal', numero = '$newnumero', serial = '$newserial', nombre = '$newnombre' WHERE id_consola = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cConsolas.php');
  }
?>
