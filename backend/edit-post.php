<?php

$errors = [];
$success = '';

$maxSize = 2097152; // 2 MB

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $entrada = $_POST['body'];
    $img = $_FILES['img'];
    $descImg = $_POST['descImg'];
    $desc = $_POST['desc'];
    $category = $_POST['category'];
    $tags = $_POST['tags'];

    // Validar que no llegen vacios los datos
    if(empty($title)){
        array_push($errors, 'El titulo no puede estar vacio');
    }

    if(empty($entrada)){
        array_push($errors, 'No puedes publicar una entrada vacia');
    }

    if(empty($img)){
        array_push($errors, 'Coloca una imagen a tu articulo');
    }

    if(empty($descImg)){
        array_push($errors, 'Escribe una descripci&oacute;n de tu imagen');
    }

    if(empty($desc)){
        array_push($errors, 'Una descripci&oacute;n es muy importante para el SEO');
    }

    if(empty($category)){
        array_push($errors, 'Te has olvidado de elegir una categoria');
    }

    if(empty($tags)){
        array_push($errors, 'Las etiquetas influyen mucho en el SEO');
    }

    // Limpiar los datos
    $title = htmlspecialchars($title);
    $title = trim($title);
    $title = filter_var($title, FILTER_SANITIZE_STRING);

    $desc = htmlspecialchars($desc);
    $desc = trim($desc);
    $desc = filter_var($desc, FILTER_SANITIZE_STRING);

    $descImg = htmlspecialchars($descImg);
    $descImg = trim($descImg);
    $descImg = filter_var($descImg, FILTER_SANITIZE_STRING);

    $category = htmlspecialchars($category);
    $category = trim($category);
    $category = filter_var($category, FILTER_SANITIZE_STRING);

    $tags = htmlspecialchars($tags);
    $tags = trim($tags);
    $tags = filter_var($tags, FILTER_SANITIZE_STRING);

    // Obtener el nombre y tipo de la imagen
    $imgName = $img['name'];
    $imgType = $img['type'];

    // Limitar la cantidad de carateres
    // $titleLen = strlen($title);
    $descLen = strlen($desc);
    $tagsLen = strlen($tags);
    $imgLen = strlen($imgName);
    $imgDescLen = strlen($descImg);

    // if($titleLen <= 21 || $titleLen >= 70){
    //     array_push($errors, 'El titulo no puede tener menos de 21 carateres ni mas de 70');
    // }

    if($descLen < 70 || $descLen > 200){
        array_push($errors, 'La descripci&oacute;n no puede tener menos de 70 carateres ni mas de 150');
    }

    if($tags >= 200){
        array_push($errors, 'La etiqueta ha superado los 200 carateres');
    }

    if($imgLen >= 200){
        array_push($errors, 'El nombre de la imagen contiene mas de 200 carateres');
    }

    if($imgDescLen > 100){
        array_push($errors, 'La descripci&oacute;n de la imagen es muy larga');
    }

    // Asegurarnos que la imagen contenga un formato de img
    if($imgType == "image/jpg" || $imgType == "image/png" || $imgType == "image/jpeg" || $imgType == "image/git" || $imgType == "image/gif" || $imgType == "image/webp"){

        // Verificar el peso de la imagen
        if($img['size'] >= $maxSize) {
            array_push($errors, 'La imagen pesa mucho, por favor solo 2MB');
        }

        if(!is_dir('./img')){
            mkdir('./img', 0777);
        }

        // Movemos la img a la carpeta img-profile
        move_uploaded_file($img['tmp_name'], './img/'.$imgName);

    }else {
        array_push($errors, "Lo siento, no aceptamos esta extension: $imgType");
    }

    // Una vez pasado este punto, entonces actualizamos
    if(count($errors) === 0){
        $statement = $conexion->prepare("UPDATE post SET title = '$title', description_post = '$desc', category = '$category', miniatura = '$imgName', img_description = '$descImg', entrada = '$entrada', tags = '$tags' WHERE id_post = $id_post AND id_post_user = $id_user"
        );
        $statement->execute(array(
            ':id_user' => $id_user,
            ':id_post' => $id_post,
            ':title' => $title,
            ':desc' => $desc,
            ':category' => $category,
            ':imgName' => $imgName,
            ':descImg' => $descImg,
            ':entrada' => $entrada,
            ':tags' => $tags
        ));

        $success = 'La entrada se ha modificado correctamente';
    }

}