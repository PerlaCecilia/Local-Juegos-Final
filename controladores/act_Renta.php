<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
//include_once("conexion.php");
include_once("conexionEspecial.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['fecha'])) {

      $nombreFijo = $_POST['editar'];

      $fecha = $_POST['fecha'];
      $hora = $_POST['hora'];
      $gamer = $_POST['gamer'];
      $accesorio = $_POST['accesorio'];
      $juego = $_POST['juego'];
      $consola = $_POST['consola'];
      $horas = $_POST['horas'];
      $cantidadConsolas = $_POST['cantidadConsolas'];
      $cantidadAccesorios = $_POST['cantidadAccesorios'];

      //echo $fecha; //echo "\n";
      //echo $hora;//echo " Gamer: ";
      //echo $gamer;//echo " Accesorio: ";
      //echo $accesorio;//echo " Juego: ";
      //echo $juego;//echo " Consola: ";
      //echo $consola;//echo "\n";
      //echo $cantidadConsolas;//echo "\n";
      //echo $cantidadAccesorios;

      if($cantidadAccesorios == '' && $cantidadConsolas == ''){
        $precio =$precio+(10*$horas);
      }elseif($cantidadAccesorios == 0 && $cantidadConsolas == 0){
        $precio =$precio+(10*$horas);
      }

      if($cantidadAccesorios != '' && $cantidadConsolas != ''){
        $precio = 10*$cantidadConsolas;
        $precio = $precio+(10*$cantidadAccesorios);
        $precio = $precio+(10*$horas);
      }elseif($cantidadAccesorios != 0 && $cantidadConsolas != 0){
        $precio = 10*$cantidadConsolas;
        $precio = $precio+(10*$cantidadAccesorios);
        $precio = $precio+(10*$horas);
      }

      if($cantidadConsolas == ''){
        $precio = $precio+(10*$cantidadAccesorios);
        $precio = $precio+(10*$horas);  
      }elseif($cantidadConsolas == 0){
        $precio = $precio+(10*$cantidadAccesorios);
        $precio = $precio+(10*$horas);
      }

      if($cantidadAccesorios == ''){
        $precio = 10*$cantidadConsolas;
        $precio = $precio+(10*$horas);
      }elseif($cantidadAccesorios == 0){
        $precio = 10*$cantidadConsolas;
        $precio = $precio+(10*$horas);  
      }
      echo $precio;
}

//Sentencia donde indico cual tabla va a tener los nuevos valores
 $cuery = "UPDATE renta SET fecha = '$fecha', hora = '$hora', id_gamer = '$gamer', id_accesorio = '$accesorio', id_instalado = '$juego', juego = '$juego', consola = '$consola', horas = '$horas', precio_total = '$precio' WHERE id_renta = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

if ($result) {
    header('Location: ../vistas/admin_cRenta.php');
  }

?>
