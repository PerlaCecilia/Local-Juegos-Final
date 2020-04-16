<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;
  
  $newnombre = $_POST['nombre'];
  $newapellidos = $_POST['apellidos'];
  $newfecha_nac = $_POST['fecha_nac'];
  $newgenero = $_POST['genero'];
  $newtelefono = $_POST['telefono'];
  $newcorreo = $_POST['correo'];
  $newusuario = $_POST['usuario'];
  $newfacebook = $_POST['facebook'];
  $newtwitch = $_POST['twitch'];
  $newmixer = $_POST['mixer'];
  $newyoutube = $_POST['youtube'];
  $newcontra = $_POST['contra'];
  
  echo $newnombre;echo "\n";
  echo $newapellidos;echo "\n";
  echo $newfecha_nac;echo "\n";
  echo $newgenero;echo "\n";
  echo $newtelefono;echo "\n";
  echo $newcorreo;echo "\n";
  echo $newusuario;echo "\n";
  echo $newfacebook;echo "\n";
  echo $newtwitch;echo "\n";
  echo $newmixer;echo "\n";
  echo $newyoutube;echo "\n";

  if($newgenero == 'Hombre'){
        $generoreal = '1';
        echo "Entro en Hombre";
      }elseif($newgenero == 'Mujer'){
        $generoreal = '2';
        echo "Entro en Mujer";
      }
  

  $cuery = "UPDATE gamers SET nombre = '$newnombre', apellido = '$newapellidos', fecha_nac = '$newfecha_nac', genero = '$generoreal', telefono = '$newtelefono', email = '$newcorreo', gamertag = '$newusuario', contra = '$newcontra', facebook = '$newfacebook', twitch = '$newtwitch', mixer = '$newmixer', youtube = '$newyoutube' WHERE id_gamer = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cGamer.php');
  }
?>
