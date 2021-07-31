<?php
// sacar todas las pub 
$stetament = $conexion->query("SELECT users.id_user, users.name, users.surname, users.photo_profile, comments.id_comment, comments.id_comment_post, comments.id_comment_user, comments.comment, comments.status_c, comments.create_at_comment FROM comments INNER JOIN users ON comments.id_comment_user = users.id_user WHERE comments.id_comment_post = $id_post AND comments.status_c = 'acept' ORDER BY comments.id_comment DESC LIMIT 5");

$stetament->execute(array());
$comentC = $stetament->fetchAll();