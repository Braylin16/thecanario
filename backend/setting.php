<?php

$errors = [];
$success = '';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];

    // Verificar que nos llegan los datos
    if(empty($name)){
        array_push($name, 'El nombre no puede estar vacio');
    }

    if(empty($surname)){
        array_push($surname, 'El apellido no puede estar vacio');
    }

    // Limpiar los datos de ingeciones de codigo
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = trim($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

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

    // Una vez pasado este punto, entonces actualizamos
    if(count($errors) === 0){
        $statement = $conexion->prepare("UPDATE users SET name = '$name', surname = '$surname' WHERE id_user = '$id_user'"
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname
        ));

        $success = 'Datos actualizados correctamente';
    }

}