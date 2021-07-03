<?php

// Estado del usuario
$status = 'acept';

//Roll del usuario a user por defecto
$roll = 'User';

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errors = [];
$success = '';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $passRepit = $_POST['passRepit'];
    $acept = $_POST['acept'];

    // Validar que lleguen los datos
    if(empty($name)){
        array_push($errors, 'Debes colocar tu nombre');
    }

    if(empty($surname)){
        array_push($errors, 'Debes colocar tu apellido');
    }

    if(empty($email)){
        array_push($errors, 'La direcci&oacute;n de correo electr&oacute;nico no puede estar vacio');
    }

    if(empty($pass)){
        array_push($errors, 'Debes colocar una contrase&ntilde;a segura');
    }
    
    if(empty($passRepit)){
        array_push($errors, 'Repite la contrase&ntilde;a');
    }

    if(empty($acept)){
        array_push($errors, 'Debes aceptar nuestras pol&iacute;ticas para poder registrarte!');
    }

    // Verificar que las pass coincidan
    if($pass != $passRepit){
        array_push($errors, 'La contrase&ntilde;a no coinciden');
    }

    // Limpiar los datos de ingeciones
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = trim($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $pass = htmlspecialchars($pass);
    $pass = trim($pass);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $passRepit = htmlspecialchars($passRepit);
    $passRepit = trim($passRepit);
    $passRepit = filter_var($passRepit, FILTER_SANITIZE_STRING);

    // Validar que sea un email autentico
    if($email != true){
        array_push($errors, 'Este no es un correo electr&oacute;nico correcto');
    }

    // Convertir a mayuscula la primera letra
    $name = ucwords($name);
    $surname = ucwords($surname);

    // Comprobar que el nombre y apellido tenga al menos 2 digitos
    $nameLen = strlen($name);
    $surnameLen = strlen($surname);

    if($nameLen <= 2){
        array_push($errors, 'El nombre debe tener al menos 3 carateres');
    }

    if($surnameLen <= 2){
        array_push($errors, 'El apellido debe tener al menos 3 carateres');
    }

    // Validar que el nombre solo contenga letras de a-z y de la A-Z
    if(!preg_match("/[a-zA-Z ]+/", $name)){
        array_push($errors .= 'Cual es tu nombre verdadero ?');
    }

    if(!preg_match("/[a-zA-Z ]+/", $surname)){
        array_push($errors, 'Cual es tu apellido verdadero ?');
    }

    // Comprobar que el nombre y apellido no contengan mas de 30 carateres
    if($nameLen >= 30){
        array_push($errors, 'El nombre no debe tener mas de 30 carateres');
    }

    if($surnameLen >= 30){
        array_push($errors, 'El apellido no debe tener mas de 30 carateres');
    }

    // Validar el numero de carateres para la pass
    $passLen = strlen($pass);
    if($passLen < 6){
        array_push($errors, 'La contrase&ntilde;a debe tener mas de 6 carateres');
    }

    if($passLen > 30){
        array_push($errors, 'La contrase&ntilde;a no debe tener mas de 30 carateres');
    }

    // Cifrar la pass
    $pass = hash('sha512', $pass);

    // Validar que el usuario no exista en la base de datos
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = :email");

    $sentencia->execute(array(
        ':email' => $email
    ));

    $result = $sentencia->fetch();

    // Comprobar que el email no sea repetido
    if($result != false){
        array_push($errors, 'Este correo electrónico ya existe, prueba otro');
    }

    // Si no hay errores, registramos al usuario
    if(count($errors) === 0){
        $statement = $conexion->prepare('INSERT INTO users (id_user, name, surname, email, password, photo_profile, browser_user, ip_user, status_u, roll, create_at_user) VALUES(
            null, :name, :surname, :email, :pass, null, :browser, :ip, :status, :roll, NOW())'
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':pass' => $pass,
            ':browser' => $browser,
            ':ip' => $ip,
            ':status' => $status,
            ':roll' => $roll
        ));

        // Guardar el email y la pass en una Cookie
        setcookie("user", "$email", time() + 31536000);
        setcookie("PH_DRgmeTSG", "$pass", time() + 31536000);
        
        $_SESSION['email'] = $email;

        $success = 'Te has registrado con exito!';
    }

}