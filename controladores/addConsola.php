<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
include_once("conexion.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['nombre'])) {

      $plataforma = $_POST['plataforma'];
      $numero = $_POST['numero'];
      $serial = $_POST['serial'];
      $nombre = $_POST['nombre'];

      if ($plataforma == 'Nintendo') {
      	$plataformareal = 1;
      }elseif($plataforma == 'PlayStation'){
      	$plataformareal = 2;
      }elseif($plataforma == 'Xbox'){
        $plataformareal = 3;
      }else{
        $plataformareal = 4;
      }

      echo $plataforma;
      echo "\n";
      echo $numero;
      echo "\n";
      echo $serial;
      echo "\n";
      echo $nombre;
      echo "\n";
      echo $plataformareal;

}

//Sentencia donde indico cual tabla va a tener los nuevos valores
$sentencia=$BD->prepare("INSERT INTO consola (id_plataforma,numero,serial,nombre)
                         VALUES (?,?,?,?)");
$resultado = $sentencia->execute([$plataformareal, $numero, $serial, $nombre]);
if ($resultado) {
    //Redirecciona en caso de que se añada correctamente
       phpAlert("Registro añadido correctamente");
       header('Location: ../vistas/admin_cConsolas.php');
  }else{
      //Mensaje en el caso contrario
      phpAlert("Error");
      header('Location: addConsola.php');
  }

?>
