<?php

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errors = [];
$success = '';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $assunt = $_POST['assunt'];
    $email_c = $_POST['email_c'];
    $text = $_POST['text'];

    // Validar llegada de todos los datos
    if(empty($name)){
        array_push($errors, 'Por favor indicanos tu nombre');
    }

    if(empty($assunt)){
        array_push($errors, 'Dinos cual es tu apellido');
    }

    if(empty($email_c)){
        array_push($errors, 'El correo no puede estar vacio');
    }

    if(empty($text)){
        array_push($errors, 'Cuentanos en que podemos ayudarte!');
    }

    // Limpiar los datos de ingeciones
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $assunt = htmlspecialchars($assunt);
    $assunt = trim($assunt);
    $assunt = filter_var($assunt, FILTER_SANITIZE_STRING);

    $email_c = htmlspecialchars($email_c);
    $email_c = trim($email_c);
    $email_c = filter_var($email_c, FILTER_VALIDATE_EMAIL);

    $text = htmlspecialchars($text);
    $text = trim($text);
    $text = filter_var($text, FILTER_SANITIZE_STRING);

    // Validar que sea un email autentico
    if($email_c != true){
        array_push($errors, 'Este no es un correo electr&oacute;nico correcto');
    }

     // Convertir a mayuscula la primera letra
     $name = ucwords($name);
     $assunt = ucwords($assunt);
 
     // Comprobar que el nombre y apellido tenga al menos 2 digitos
     $nameLen = strlen($name);
     $assuntLen = strlen($assunt);
 
    if($nameLen <= 2){
        array_push($errors, 'Cual es tu asunto ?');
    }
 
    if($assuntLen >= 201){
        array_push($errors, 'El asunto solo puede tener 200 carateres');
    }

    $textLen = strlen($text);

    if($textLen >= 7000){
        array_push($errors, 'Tu mensaje ha excedido el los 7 mil carateres permitido');
    }
 
    // Validar que el nombre solo contenga letras de a-z y de la A-Z
     if(!preg_match("/[a-zA-Z ]+/", $name)){
         array_push($errors .= 'Cual es tu nombre verdadero ?');
     }
 
    // Comprobar que el nombre y apellido no contengan mas de 30 carateres
     if($nameLen >= 30){
         array_push($errors, 'El nombre no debe tener mas de 30 carateres');
     }

    // Validar el numero de carateres para el email
    $emailLen = strlen($email_c);

    $emailLen = strlen($email_c);
    if($emailLen < 6){
        array_push($errors, 'El email tiene muy pocos carateres');
    }

    if($emailLen > 50){
        array_push($errors, 'El email ha superado la cantidad de carateres permitidos');
    }

    // Si no hay errores, registramos al usuario
    if(count($errors) === 0){
        $statement = $conexion->prepare('INSERT INTO contact (id_contact, name_c, assunt_c, email_c, message_c, browser_c, ip_c, create_at_c) VALUES(
            null, :name, :assunt, :email_c, :text, :browser, :ip, NOW())'
        );
        $statement->execute(array(
            ':name' => $name,
            ':assunt' => $assunt,
            ':email_c' => $email_c,
            ':text' => $text,
            ':browser' => $browser,
            ':ip' => $ip
        ));

        $success = "$name, tu mensaje fue enviado con &eacute;xito!";

    }

}