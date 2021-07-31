<?php

$status = 'public';

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$maxSize = 2097152; // 2 MB

$errors = [];
$success = '';

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $body = $_POST['body'];
    $desc = $_POST['description'];
    $img = $_FILES['img'];
    $imgDesc = $_POST['imgDesc'];
    $tags = $_POST['tags'];
    $category = $_POST['category'];

    // Validar que llegan los datos
    if(empty($title)){
        array_push($errors, 'Escribe el titulo de la entrada');
    }

    if(empty($body)){
        array_push($errors, 'Escribe el contenido de la entrada');
    }

    if(empty($desc)){
        array_push($errors, 'Escribe la descripci&oacute;n de la entrada');
    }

    if(empty($img)){
        array_push($errors, 'Sube una imagen representando tu articulo');
    }

    if(empty($imgDesc)){
        array_push($errors, 'Coloca una descripci&oacute;n para tu imagen');
    }

    if(empty($tags)){
        array_push($errors, 'Escribe al menos 5 etiquetas para tu entrada');
    }

    if(empty($category)){
        array_push($errors, 'Selecciona una categoria');
    }

    // Limpiar datos
    $title = htmlspecialchars($title);
    $title = trim($title);
    $title = filter_var($title, FILTER_SANITIZE_STRING);

    $desc = htmlspecialchars($desc);
    $desc = trim($desc);
    $desc = filter_var($desc, FILTER_SANITIZE_STRING);

    $category = htmlspecialchars($category);
    $category = trim($category);
    $category = filter_var($category, FILTER_SANITIZE_STRING);

    $tags = htmlspecialchars($tags);
    $tags = trim($tags);
    $tags = filter_var($tags, FILTER_SANITIZE_STRING);

    $imgDesc = htmlspecialchars($imgDesc);
    $imgDesc = trim($imgDesc);
    $imgDesc = filter_var($imgDesc, FILTER_SANITIZE_STRING);

    // Obtener el nombre y tipo de la imagen
    $imgName = $img['name'];
    $imgType = $img['type'];

    // Limitar la cantidad de carateres
    // $titleLen = strlen($title);
    $descLen = strlen($desc);
    $tagsLen = strlen($tags);
    $imgLen = strlen($imgName);
    $imgDescLen = strlen($imgDesc);

    // if($titleLen <= 21 || $titleLen >= 70){
    //     array_push($errors, 'El titulo no puede tener menos de 21 carateres ni mas de 70');
    // }

    if($descLen < 70 || $descLen > 180){
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

    // Si no hay errores, publicamos la entrada
    if(count($errors) === 0){
        $statement = $conexion->prepare('INSERT INTO post (id_post, id_post_user, title, description_post, category, miniatura, img_description, entrada, tags, status, browser_post, ip_post, create_at_post) VALUES(
            null, :id_user, :title, :desc, :category, :imgName, :imgDesc, :body, :tags, :status, :browser, :ip, NOW())'
        );
        $statement->execute(array(
            ':id_user' => $id_user,
            ':title' => $title,
            ':desc' => $desc,
            ':category' => $category,
            ':imgName' => $imgName,
            ':imgDesc' => $imgDesc,
            ':body' => $body,
            ':tags' => $tags,
            ':status' => $status,
            ':browser' => $browser,
            ':ip' => $ip
        ));

        // Te has registrado con exito
        // header('Location: publications');

        $success = 'Tu entrada se ha publicado con exito!';
    }

}