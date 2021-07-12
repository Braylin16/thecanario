<?php
// sacar todas los articulos de "Var mas publicaciones"
$main = $conexion->query("SELECT post.id_post, post.title, post.category, post.miniatura, post.create_at_post, view.view FROM post INNER JOIN view ON post.id_post = view.id_view_post ORDER BY post.id_post DESC LIMIT 3");
$main->execute(array());
$mainPost = $main->fetchAll();