<?php
//include_once("../controladores/conexion.php");
include_once("../controladores/conexionEspecial.php");

$nombre = $_POST['id'];
echo $nombre;
echo $usuario;

$cuery = "DELETE FROM renta WHERE id_renta='$nombre'";

echo $cuery;
$result = mysqli_query($BD, $cuery);

if ($result) {
  header('Location: ../vistas/admin_cRenta.php');
} else {
  header('Location: ../vistas/admin_cRenta.php');
}
?>
