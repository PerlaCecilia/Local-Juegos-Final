<?php
session_start();

include_once 'conexion.php';

$sql_ID = "SELECT id_gamer FROM gamers WHERE gamertag = ?";
$sentenciaID = $BD -> prepare($sql_ID);
$sentenciaID -> execute([$_SESSION['usuario']]);
$resultadoID = $sentenciaID -> fetch(PDO::FETCH_OBJ);

$id = $resultadoID -> id_gamer;

$sql_Renta = "SELECT r.fecha as fecha, r.hora as hora,
a.nombre as accesorio, j.nombre as juego, c.nombre as consola
FROM renta r
INNER JOIN accesorio a ON r.id_accesorio = a.id_accesorio
INNER JOIN instalado i ON r.id_instalado = i.id_instalado
INNER JOIN juego j ON r.juego = j.id_juego
INNER JOIN consola c ON r.consola = c.id_consola
WHERE id_gamer = ?";
$sentenciaRenta = $BD -> prepare($sql_Renta);
$sentenciaRenta -> execute([$id]);
$resultadoRenta = $sentenciaRenta -> fetchAll(PDO::FETCH_OBJ);

?>
