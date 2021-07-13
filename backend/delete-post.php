<?php

$success = '';
$errors = [];

if(isset($_POST['submit'])){

    $id_post = $_POST['submit'];
    $id_post = (int)$id_post;
    $delete = 'delete';

    // Eliminar el producto cambiado el estado a delete
    if(isset($delete)){
        $statement = $conexion->prepare("UPDATE post SET status = '$delete' WHERE id_post_user = $id_user AND id_post = $id_post"
        );
        $statement->execute(array(
            ':delete' => $delete,
            ':id_post' => $id_post
        ));

        $success = 'La entrada se ha eliminado con &eacute;xito!';
    }

}