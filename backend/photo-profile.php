<?php

$errors = [];
$success = '';
$maxSize = 2097152; // 2 MB

if(isset($_POST['submit'])){

    $img = $_FILES['img'];

    // Validar que no llegue vacia la imagen
    if(empty($img)){
        array_push($errors, 'No has seleccionado una imagen');
    }

    // Obtener el nombre y tipo de la imagen
    $imgName = $img['name'];
    $imgType = $img['type'];

    // Asegurarnos que la imagen contenga un formato de img
    if($imgType == "image/jpg" || $imgType == "image/png" || $imgType == "image/jpeg" || $imgType == "image/git" || $imgType == "image/gif" || $imgType == "image/webp"){

        // Verificar el peso de la imagen
        if($img['size'] >= $maxSize) {
            array_push($errors, 'La imagen pesa mucho, por favor solo 2MB');
        }

        if(!is_dir('./img-profile')){
            mkdir('./img-profile', 0777);
        }

        // Movemos la img a la carpeta img-profile
        move_uploaded_file($img['tmp_name'], './img-profile/'.$imgName);

    }else {
        array_push($errors, "Lo siento, no aceptamos esta extension: $imgName");
    }

    // Si no ha ocurrido ningun error, entonces actualizamos la img en la DB
    if(count($errors) === 0){
        $statement = $conexion->prepare("UPDATE users SET photo_profile = '$imgName' WHERE id_user = $id_user"
        );
        $statement->execute(array(
            ':imgName' => $imgName,
            ':id_user' => $id_user

        ));

        $success = 'La imagen se ha subido con &eacute;xito';
    }

}