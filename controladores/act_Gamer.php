<?php
  //include_once("../controladores/conexion.php");
  include_once("../controladores/conexionEspecial.php");


  $nombreFijo = $_POST['editar'];
  echo $nombreFijo;
  
  $newnombre = $_POST['nombre'];
  $newapellidos = $_POST['apellidos'];
  $newfecha_nac = $_POST['fecha_nac'];
  $newtelefono = $_POST['telefono'];
  $newcorreo = $_POST['correo'];
  $newusuario = $_POST['usuario'];
  $newredes = $_POST['redes'];
  $newgenero = $_POST['genero'];
  $newcontra = $_POST['contra'];
  
  echo $newnombre;
  echo $newapellidos;
  echo $newfecha_nac;
  echo $newtelefono;
  echo $newcorreo;
  echo $newusuario;
  echo $newredes;
  echo $newgenero;

  if($newgenero == 'Hombre'){
        $generoreal = '1';
        echo "Entro en Hombre";
      }elseif($newgenero == 'Mujer'){
        $generoreal = '2';
        echo "Entro en Mujer";
      }
  

  $cuery = "UPDATE gamers SET nombre = '$newnombre', apellido = '$newapellidos', fecha_nac = '$newfecha_nac', genero = '$generoreal', telefono = '$newtelefono', email = '$newcorreo', gamertag = '$newusuario', id_redsocial = '$newredes', contra = '' WHERE id_gamer = '$nombreFijo'";
  echo $cuery;

  $result = mysqli_query($BD, $cuery);

  if ($result) {
    header('Location: ../vistas/admin_cGamer.php');
  }
?>
