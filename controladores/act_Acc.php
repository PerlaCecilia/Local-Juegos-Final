<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;

  $newnombre = $_POST['nombre'];
  $newprecio = $_POST['precio'];

  echo $newnombre;


  $cuery = "UPDATE accesorio SET nombre = '$newnombre', precio = '$newprecio' WHERE id_accesorio = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cAccesorio.php');
  }
?>
