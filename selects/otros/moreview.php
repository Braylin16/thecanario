<?php
// sacar todas las publicaciones que son publicadas por mi
$moreview = $conexion->query("SELECT post.id_post, post.title, post.miniatura, post.create_at_post FROM post INNER JOIN view WHERE category = 'Otros' AND status = 'public' ORDER BY view DESC LIMIT 1");
$moreview->execute(array());
$views = $moreview->fetchAll();