<?php

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errors = [];
$success = '';

if(isset($_POST['submit'])){

    $email_su = $_POST['email_su'];

    // Que nos llegen vacios los datos
    if(empty($email_su)){
        array_push($errors, 'Debes colocar un correo electr&oacute;nico');
    }

    // Limpiar datos
    $email_su = htmlspecialchars($email_su);
    $email_su = trim($email_su);
    $email_su = filter_var($email_su, FILTER_VALIDATE_EMAIL);

    // Validar que sea un email autentico
    if($email_su != true){
        array_push($errors, 'Este no es un correo electr&oacute;nico correcto');
    }

    // Validar el numero de carateres para el email
    $email_suLen = strlen($email_su);

    $email_suLen = strlen($email_su);
    if($email_suLen < 6){
        array_push($errors, 'El email tiene muy pocos carateres');
    }

    if($email_suLen > 50){
        array_push($errors, 'El email ha superado la cantidad de carateres permitidos');
    }

    // Validar que el usuario no exista en la base de datos
    $sentencia = $conexion->prepare("SELECT * FROM suscribe WHERE email = :email_su");

    $sentencia->execute(array(
        ':email_su' => $email_su
    ));

    $result = $sentencia->fetch();

    // Comprobar que el email no sea repetido
    if($result != false){
        array_push($errors, 'Este correo ya esta en nuestro historial de notificaciones');
    }

        // Si no hay errores, registramos el correo
        if(count($errors) === 0){
            $statement = $conexion->prepare('INSERT INTO suscribe (id_suscribe, email, browser_suscribe, ip_suscribe, create_at_suscribe) VALUES(
                null, :email_su, :browser, :ip, NOW())'
            );
            $statement->execute(array(
                ':email_su' => $email_su,
                ':browser' => $browser,
                ':ip' => $ip
            ));

            $success = 'Hemos recibido tu correo. ¡Gracias!';

        }

}