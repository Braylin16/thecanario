<?php
// sacar los post mas populares
$masleidas = $conexion->query("SELECT
post.id_post,
post.title, 
post.miniatura,
post.category,
post.create_at_post
FROM post INNER JOIN `view` on post.id_post = `view`.id_view_post
ORDER BY `view`.view DESC LIMIT 4");
$masleidas->execute(array());
$masleida = $masleidas->fetchAll();