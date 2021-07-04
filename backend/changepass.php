<?php

$errors = [];
$success = '';

if(isset($_POST['submit'])){

    $pass = $_POST['pass'];
    $passRepit = $_POST['passRepit'];

    // Validar que no llegan vacios los datos
    if(empty($pass)){
        array_push($errors, 'Coloca una contrase&ntilde;a');
    }

    if(empty($passRepit)){
        array_push($errors, 'Repite la contrase&ntilde;a');
    }

    // Si no coiciden la pass
    if($pass != $passRepit){
        array_push($errors, 'Las contrase&ntilde;as no coiciden, intentalo de nuevo');
    }

    // Limpiar las pass de ingeciones
    $pass = htmlspecialchars($pass);
    $pass = trim($pass);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

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

    // Una vez pasado este punto, entonces actualizamos
    if(count($errors) === 0){
        $statement = $conexion->prepare("UPDATE users SET password = '$pass' WHERE id_user = '$id_user'"
        );
        $statement->execute(array(
            ':pass' => $pass
        ));

        $success = 'Datos actualizados correctamente!';
    }

}