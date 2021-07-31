<?php
// sacar todas los articulos de "Var mas publicaciones"
$stmt = $conexion->query("SELECT post.id_post, post.title, post.category, post.miniatura, post.create_at_post, view.view FROM post INNER JOIN view ON post.id_post = view.id_view_post WHERE post.id_post != $id_post ORDER BY rand() LIMIT 4");
$stmt->execute();