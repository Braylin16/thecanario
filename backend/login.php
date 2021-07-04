<?php session_start();

require_once('./url/url.php');

$error = '';

if(isset($_POST['login'])){

    $email = $_POST['emailLogin'];
    $pass = $_POST['passLogin'];

    // Validar si el chek esta vacio
    if(isset($_POST['chek'])){

        $chek = 'acept';
        $chek = htmlspecialchars($chek);
        $chek = trim($chek);
        $chek = filter_var($chek, FILTER_SANITIZE_STRING);
    }

    // Limpiar datos
    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $pass = htmlspecialchars($pass);
    $pass = trim($pass);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    // Cifrar las password
    $pass = hash('sha512', $pass);

    // sentencia para saber si lo que introduce el usuario es correcto
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = :email AND password = :pass");

    $sentencia->execute(array(
        ':email' => $email,
        ':pass' => $pass
    ));

    $resultado = $sentencia->fetch();

    // Si el correo y la contraseña coiciden
    if($resultado == true){

        if($chek === 'acept'){
            // Guardar el email y la pass en una Cookie
            setcookie("user", "$email", time() + 31536000);
            setcookie("PH_DRgmeTSG", "$pass", time() + 31536000);
        }
        
        $_SESSION['email'] = $email;

        header("Location: $url");

    } else {
        $error = 'Has escrito mal el correo electrónico o la contraseña';
    }

}