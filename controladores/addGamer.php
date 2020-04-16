<?php

  function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
  }

//Mando a llamar el archivo con la conexion a la BD
include_once("conexion.php");

//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
  if (isset($_POST['nombre'])) {

      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $fecha_nac = $_POST['fecha_nac'];
      $telefono = $_POST['telefono'];
      $correo = $_POST['correo'];
      $usuario = $_POST['usuario'];
      $contra = $_POST['contra'];
      $genero = $_POST['genero'];
      $facebook = $_POST['facebook'];
      $twitch = $_POST['twitch'];
      $mixer = $_POST['mixer'];
      $youtube = $_POST['youtube'];

      echo $nombre;
      echo $apellidos;
      echo $fecha_nac;
      echo $telefono;
      echo $correo;
      echo $usuario;
      echo $genero;
      echo $facebook;
      echo $twitch;
      echo $mixer;
      echo $youtube;

      if($genero == 'Hombre'){
        $generoreal = '1';
      }else{
        $generoreal = '2';
      }

      if($facebook == ''){
        $facebook = 'No';
      }elseif($facebook == ' '){
        $facebook = 'No';
      }

      if($twitch == ''){
        $twitch = 'No';
      }elseif($twitch == ' '){
        $twitch = 'No';
      }

      if($mixer == ''){
        $mixer = 'No';
      }elseif($mixer == ' '){
        $mixer = 'No';
      }

      if($youtube == ''){
        $youtube = 'No';
      }elseif($youtube == ' '){
        $youtube = 'No';
      }
      //echo $generoreal;
}

//Sentencia donde indico cual tabla va a tener los nuevos valores
$sentencia=$BD->prepare("INSERT INTO gamers (nombre,apellido,fecha_nac,genero,telefono,email,gamertag,contra,facebook,twitch,mixer,youtube)
                         VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$nombre, $apellidos, $fecha_nac, $generoreal, $telefono, $correo, $usuario, $contra, $facebook, $twitch, $mixer, $youtube]);
if ($resultado) {
    //Redirecciona en caso de que se añada correctamente
       phpAlert("Registro añadido correctamente");
       header('Location: ../vistas/admin_cGamer.php');
  }else{
      //Mensaje en el caso contrario
      phpAlert("Error");
      header('Location: addGamer.php');
  }

?>
