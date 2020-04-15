<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
include_once("conexion.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['juego'])) {

      $juego = $_POST['juego'];
      $consola = $_POST['consola'];

      if($juego == 'Call_Of_Duty'){
        $juegoreal = '1';
      }else{
        $juegoreal = '2';
      }

      if($consola == 'Xbox'){
        $consolareal = '1';
      }else{
        $consolareal = '2';
      }
}

//Sentencia donde indico cual tabla va a tener los nuevos valores
$sentencia=$BD->prepare("INSERT INTO instalado (id_juego, id_consola)
                         VALUES (?,?)");
$resultado = $sentencia->execute([$juegoreal, $consolareal]);
if ($resultado) {
    //Redirecciona en caso de que se añada correctamente
       phpAlert("Registro añadido correctamente");
       header('Location: ../vistas/admin_cInstalado.php');
  }else{
      //Mensaje en el caso contrario
      phpAlert("Error");
      header('Location: addInstalado.php');
  }

?>
