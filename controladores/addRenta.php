<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
include_once("conexion.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['fecha'])) {

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
$sentencia=$BD->prepare("INSERT INTO renta (fecha,hora,id_gamer,id_accesorio,id_instalado,juego,consola)
                         VALUES (?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$fecha, $hora, $gamerreal, $accesorioreal, $juegoreal, $juegoreal, $consolareal]);
if ($resultado) {
    //Redirecciona en caso de que se añada correctamente
       phpAlert("Registro añadido correctamente");
       header('Location: ../vistas/admin_cRenta.php');
  }else{
      //Mensaje en el caso contrario
      phpAlert("Error");
      header('Location: addRenta.php');
  }

?>
