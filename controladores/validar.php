<?php
session_start();

//Conexion con la BD
include_once "conexion.php";

// Toma los datos ingresados del usuario
$nombre = $_POST['usuario'];
$contra = $_POST['contra'];

// Busca en la tabla de administradores un registro que coincida
$sql = "SELECT * FROM admin WHERE usuario = ? AND contra = ?";
$sentencia = $BD -> prepare($sql);
$sentencia -> execute([$nombre, $contra]);
$resultado = $sentencia -> fetchAll(PDO::FETCH_OBJ);

// Si encuentra algo, manda a la pagina de administador
// y guarda sus datos de sesion
if ($resultado != null) {
  header('Location: ../vistas/admin_Inicio.php');
  $_SESSION['tipo'] = "admin";
  $_SESSION['usuario'] = $nombre;

  // Mensaje de bienvenida
  echo'<script type="text/javascript">
    alert("Bienvenido, administador");
    window.location.href="index.php";
    </script>';

} else {
  // Busca en la tabla de gamers un registro que coincida
  $sql_Gam = "SELECT id_gamer FROM gamers WHERE gamertag = ? AND contra = ?";
  $sentencia_Gam = $BD -> prepare($sql_Gam);
  $sentencia_Gam -> execute([$nombre, $contra]);
  $resultado_Gam = $sentencia_Gam -> fetchAll(PDO::FETCH_OBJ);

  // Obtener id
  //$id_Gamer = $sentencia_Gam -> id_gamer;

  /*$getNormalJuego = $BD -> query("SELECT id_juego, imagen, nombre FROM juego");
  $resultadoNormalJuego = $getNormalJuego -> fetchAll(PDO::FETCH_OBJ);*/

  //echo $resID -> id_gamer

  // Si encuentra algo, manda a la pagina de gamer
  // y guarda sus datos de sesion
  if ($resultado_Gam != null) {
    header('Location: ../vistas/gamer_Inicio.php');
    $_SESSION['tipo'] = "gamer";
    $_SESSION['usuario'] = $nombre;
    //$_SESSION['identificador'] = $id_Gamer;

    // Mensaje de bienvenida
    echo'<script type="text/javascript">
    alert("Bienvenido, gamer");
    window.location.href="index.php";
    </script>';
  }

}
  // En caso de que no encuentre algo, avisa al usuario
  echo'<script type="text/javascript">
  alert("No se encontraron los datos."); window.location.href="index.php";
  </script>';

  // Refresca la misma pagina
  header("Refresh:0");
?>
