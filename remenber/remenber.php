<?php

if(isset($_COOKIE['user']) AND isset($_COOKIE['PH_DRgmeTSG'])){
    $user = $_COOKIE['user'];
    $key = $_COOKIE['PH_DRgmeTSG']; 
}

// Iniciara la sesion si no hay un usuario con sesion iniciada y hay datos en la cookies
if(!isset($_SESSION['email']) AND isset($user) AND isset($key)){

    // sentencia para saber si lo que introduce el usuario es correcto
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = '$user' AND password = '$key'");

    $sentencia->execute(array(
        ':user' => $user,
        ':key' => $key
    ));

    $resultado = $sentencia->fetch();

    if($resultado == true){

        $_SESSION['email'] = $user;
    }

}