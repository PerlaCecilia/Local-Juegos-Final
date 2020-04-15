<?php
  //Mando a llamar el archivo que contiene la conexion con la BD
  include_once "../controladores/conexion.php";

  // Vista de la tabla para usuario normal
  $getNormalTorneo = $BD -> query("SELECT t.id_torneo as id, t.nombre, j.nombre as juego, t.fecha, t.hora, m.tipo as modalidad, f.tipo as forma, t.max_jugadores, t.descripcion, e.tipo as estatus FROM torneo t INNER JOIN juego j ON t.juego = j.id_juego INNER JOIN modalidad m ON t.modalidad = m.id_modalidad INNER JOIN forma f ON t.forma = f.id_forma INNER JOIN estatus e ON t.estatus = e.id_estatus ORDER BY `id` ASC");
  $resultadoNormalTorneo = $getNormalTorneo -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalTorneo == null || empty($resultadoNormalTorneo)){
    // Mensaje de alerta
  }

  $getNormalJuego = $BD -> query("SELECT id_juego, imagen, nombre FROM juego");
  $resultadoNormalJuego = $getNormalJuego -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalJuego == null || empty($resultadoNormalJuego)){
    // Mensaje de alerta
  }

  $getNormalConsola = $BD -> query("SELECT c.id_consola as id, p.nombre as plataforma, c.numero, c.serial, c.nombre FROM consola c INNER JOIN plataforma p ON c.id_plataforma = p.id_plataforma");
  $resultadoNormalConsola = $getNormalConsola -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoNormalConsola == null || empty($resultadoNormalConsola)){
    // Mensaje de alerta
  }

  $getAdminInstalado = $BD -> query("SELECT i.id_instalado as id, j.nombre as juego, c.nombre as consola FROM instalado i INNER JOIN juego j ON i.id_juego = j.id_juego INNER JOIN consola c ON i.id_consola = c.id_consola ORDER BY `id` ASC");
  $resultadoAdminInstalado = $getAdminInstalado -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminInstalado == null || empty($resultadoAdminInstalado)){
    // Mensaje de alerta
  }

  $getAdminRenta = $BD -> query("SELECT r.id_renta as id, r.fecha, r.hora, g.nombre as gamer, a.nombre as accesorio, j.nombre as juego, c.nombre as consola FROM renta r INNER JOIN gamers g ON r.id_gamer = g.id_gamer INNER JOIN accesorio a ON r.id_accesorio = a.id_accesorio INNER JOIN instalado i ON r.id_instalado = i.id_instalado INNER JOIN juego j ON r.juego = j.id_juego INNER JOIN consola c ON r.consola = c.id_consola ORDER BY `id` ASC");
  $resultadoAdminRenta = $getAdminRenta -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminRenta == null || empty($resultadoAdminRenta)){
    // Mensaje de alerta
  }

  $getAdminAccesorio = $BD -> query("SELECT id_accesorio, nombre FROM accesorio");
  $resultadoAdminAccesorio = $getAdminAccesorio -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminAccesorio == null || empty($resultadoAdminAccesorio)){
    // Mensaje de alerta
  }

  $getAdminPremio = $BD -> query("SELECT id_premio, premio FROM premio");
  $resultadoAdminPremio = $getAdminPremio -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminPremio == null || empty($resultadoAdminPremio)){
    // Mensaje de alerta
  }

  // Detalles

  $getAdminForma = $BD -> query("SELECT id_forma, tipo FROM forma");
  $resultadoAdminForma = $getAdminForma -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminForma == null || empty($resultadoAdminForma)){
    // Mensaje de alerta
  }

  $getAdminMod = $BD -> query("SELECT id_modalidad, tipo FROM modalidad");
  $resultadoAdminMod = $getAdminMod -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminMod == null || empty($resultadoAdminMod)){
    // Mensaje de alerta
  }

  $getAdminEsta = $BD -> query("SELECT id_estatus, tipo FROM estatus");
  $resultadoAdminEsta = $getAdminEsta -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminEsta == null || empty($resultadoAdminEsta)){
    // Mensaje de alerta
  }

  // Fin Detalles

  $getAdminGamer = $BD -> query("SELECT id_gamer, nombre, apellido, fecha_nac, genero, telefono, email, gamertag, foto, id_redsocial, contra FROM gamers");
  $resultadoAdminGamer = $getAdminGamer -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resultadoAdminGamer == null || empty($resultadoAdminGamer)){
    // Mensaje de alerta
  }

  //Torneo vista gamer

  $getTornGamer = $BD -> query("SELECT t.id_torneo as id, t.nombre, j.nombre as juego,
  t.fecha, t.hora, m.tipo as modalidad, f.tipo as forma, t.max_jugadores,
  t.descripcion, e.tipo as estatus FROM torneo t
  INNER JOIN juego j ON t.juego = j.id_juego
  INNER JOIN modalidad m ON t.modalidad = m.id_modalidad
  INNER JOIN forma f ON t.forma = f.id_forma
  INNER JOIN estatus e ON t.estatus = e.id_estatus
  WHERE estatus = 1 OR estatus = 3");
  $resTornGamer = $getTornGamer -> fetchAll(PDO::FETCH_OBJ);

  //"if" en caso de que retorne NULL
  if($resTornGamer == null || empty($resTornGamer)){
    // Mensaje de alerta
  }
  /*
  SELECT t.id_torneo as id, t.nombre, j.nombre as juego, t.fecha, t.hora, m.tipo as modalidad, f.tipo as forma, t.max_jugadores, t.descripcion, e.tipo as estatus FROM torneo t INNER JOIN juego j ON t.juego = j.id_juego INNER JOIN modalidad m ON t.modalidad = m.id_modalidad INNER JOIN forma f ON t.forma = f.id_forma INNER JOIN estatus e ON t.estatus = e.id_estatus WHERE estatus = 1 OR estatus = 3
  */

?>
