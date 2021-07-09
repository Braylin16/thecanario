<?php
// sacar todas los articulos de "Var mas publicaciones"
$stmt = $conexion->query("SELECT post.id_post, post.title, post.category, post.miniatura, post.create_at_post FROM post WHERE post.id_post != $id_post LIMIT 4");
$stmt->execute();