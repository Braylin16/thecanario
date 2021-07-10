<?php

// Cantidad de comentarios de cada publicacion
$sntnca = $conexion->query("SELECT id_comment, COUNT(id_comment) AS countComment FROM comments WHERE id_comment_post = $id_post LIMIT 10");
$sntnca->execute();
while ($countComments = $sntnca->fetch()) {
    // cantidad de comentarios
    $countComment = $countComments['countComment'];

}