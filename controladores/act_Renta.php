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

      if($gamer == 'Erick'){
        $gamerreal = '1';
      }else{
        $gamerreal = '2';
      }

      if($accesorio == 'Diadema'){
        $accesorioreal = '1';
      }else{
        $accesorioreal = '2';
      }

      if($juego == 'Call_Of_Duty'){
        $juegoreal = '1';
      }else{
        $juegoreal = '2';
      }

      if($consola == 'Xbox_One_S'){
        $consolareal = '1';
      }else{
        $consolareal = '2';
      }

}

//Sentencia donde indico cual tabla va a tener los nuevos valores
 $cuery = "UPDATE renta SET fecha = '$fecha', hora = '$hora', id_gamer = '$gamerreal', id_accesorio = '$accesorioreal', id_instalado = '$juegoreal', juego = '$juegoreal', consola = '$consolareal' WHERE id_renta = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

if ($result) {
    header('Location: ../vistas/admin_cRenta.php');
  }

?>
