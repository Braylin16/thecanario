<?php
// sacar los post mas populares
$masleidas = $conexion->query("SELECT post.id_post, post.title, post.miniatura, post.category FROM post INNER JOIN view ORDER BY 'view' DESC LIMIT 4");
$masleidas->execute(array());
$masleida = $masleidas->fetchAll();