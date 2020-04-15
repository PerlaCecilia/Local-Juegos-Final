<?php
//include_once("../controladores/conexion.php");
include_once("../controladores/conexionEspecial.php");

$nombre = $_POST['id'];
echo $nombre;

$cuery = "DELETE FROM accesorio WHERE id_accesorio='$nombre'";

echo $cuery;
$result = mysqli_query($BD, $cuery);

if ($result) {
  header('Location: ../vistas/admin_cAccesorio.php');
} else {
  header('Location: ../vistas/admin_cAccesorio.php');
}
?>
