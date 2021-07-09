<?php

// Estado del usuario
$status = 'acept';

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errorsC = [];
$successC = '';
$sesion = '';

if(isset($_POST['submitComment'])){

    $comment = $_POST['comment'];

    // Si intenta comentar sin inicial sesion, le lanzamos un error sesion
    if(!isset($id_user)){
        $sesion = "Debes <a href='http://localhost/thecanario/register' class='black-text'>registrate</a> o <a href='http://localhost/thecanario/login' class='black-text'>inicial sesi&oacute;n</a> para comentar";
    }

    // Verificar que el comentario no nos llega vacio
    if(empty($comment)){
        array_push($errorsC, 'El comentario no puede estar vacio');
    }

    // Limpiar el comentario de ingeciones
    $comment = htmlspecialchars($comment);
    $comment = trim($comment);
    $comment = filter_var($comment, FILTER_SANITIZE_STRING);

    // La cantidad de carateres del comentario no pude ser mayor a los 50 mil carateres
    $commentLen = strlen($comment);
    if($commentLen > 50000){
        array_push($errorsC, 'Tu comentario es muy largo');
    }

    // Si no hay errores, guardamos el comentario
    if(count($errorsC) === 0 AND $sesion == ''){
        $statement = $conexion->prepare('INSERT INTO comments (id_comment, id_comment_post, id_comment_user, comment, browser_comment, ip_comment, status_c, create_at_comment) VALUES(
            null, :id_post, :id_user, :comment, :browser, :ip, :status, NOW())'
        );
        $statement->execute(array(
            ':id_post' => $id_post,
            ':id_user' => $id_user,
            ':comment' => $comment,
            ':browser' => $browser,
            ':ip' => $ip,
            ':status' => $status
        ));

        $successC = 'Tu comentario se ha enviado con &eacute;xito!';
    }

}