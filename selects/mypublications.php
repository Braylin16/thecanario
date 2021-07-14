<?php
// sacar todas las publicaciones que son publicadas por mi
$post = $conexion->query("SELECT id_post, title, miniatura FROM post WHERE id_post_user = $id_user AND status = 'public' ORDER BY id_post DESC LIMIT 15");
$post->execute(array());
$mypost = $post->fetchAll();