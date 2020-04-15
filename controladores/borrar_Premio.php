<?php
//include_once("../controladores/conexion.php");
include_once("../controladores/conexionEspecial.php");

$nombre = $_POST['id'];
echo $nombre;

$cuery = "DELETE FROM premio WHERE id_premio='$nombre'";

echo $cuery;
$result = mysqli_query($BD, $cuery);

if ($result) {
  header('Location: ../vistas/admin_cPremio.php');
} else {
  header('Location: ../vistas/admin_cPremio.php');
}
?>
