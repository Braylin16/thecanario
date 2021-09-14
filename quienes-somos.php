<?php session_start(); 
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Qui&eacute;nes somos | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <meta name="robots" content="noindex" />
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container row section col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class='col s12 white z-depth-1 section'>
            <h1 class="flow-text center">
                Qui&eacute;nes somos
            </h1>

            <p>
                <b>thecanario.com</b> es un proyecto de jóvenes estudiantes de inform&aacute;tica cuyo proposito es ofrecer un entretenimiento sano a través de la lectura.
            </p>
            
            <p>
                Nuestro principal propocito es tratar de llevar un aprendisaje a cada persona que le&eacute; nuestro contenido y que logre sacar un tipo de provecho de nuestra lecturas. Por eso somo cuidadoso con lo que escribimos y nos preocupamos mucho porque nuestros lectures tengan un alto nivel de entretenimiento educativo.
            </p>

            <b>Editor en jefe:</b> Dailin Payano.

            <h2 class="flow-text">Nos encontramos en:</h2>
            <address>
                <b>Pa&iacute;s:</b> Rep&uacute;blica Dominicana <br>
                <b>Provincia:</b> Barahona <br>
                <b>Ciudad:</b> Vicente Noble <br>
                <b>Barrio:</b> Placer Bonito <br>
                <b>Calle:</b> San Juan Bautista
            </address>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>