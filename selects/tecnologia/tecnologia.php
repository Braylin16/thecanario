<?php
// sacar todas las publicaciones que son publicadas por mi
$post = $conexion->query("SELECT id_post, title, miniatura, create_at_post FROM post WHERE category = 'Tecnología' AND status = 'public' ORDER BY id_post DESC LIMIT 4");
$post->execute(array());
$mypost = $post->fetchAll();