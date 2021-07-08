<?php

 // Seleccionar todos los datos del articulo
 $stetament = $conexion->prepare(
    "SELECT users.id_user, users.name, users.surname, post.id_post, post.title, post.description_post, post.category, post.miniatura, post.img_description, post.entrada, post.tags, post.status, post.create_at_post FROM post INNER JOIN users WHERE post.id_post = $id_post"
);

$stetament->execute(array());
$result = $stetament->fetchAll();