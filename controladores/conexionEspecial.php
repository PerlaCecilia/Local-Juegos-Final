<?php
$nombre_base_de_datos = "local_juegos";
$usuario = "root";
$contraseña = "";

$BD = mysqli_connect("localhost", "root", "", "local_juegos");

if(mysqli_connect_errno()){
  echo "ERROR";
  exit();
}

?>
