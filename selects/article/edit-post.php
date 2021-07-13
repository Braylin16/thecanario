<?php
// Sacar la informacion del articulo que se va a editar
$stmt = $conexion->query("SELECT title, description_post, category, miniatura, img_description, entrada, tags FROM post WHERE id_post = $id_post AND id_post_user = $id_user");
$stmt->execute();