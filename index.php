<?php session_start(); 
require_once('connection/connection.php');
require_once('functions/functions.php');
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}

// Suscribirse con el correo electronico
require_once('backend/suscribe.php');
// Selecionar los datos de las primeras 3 entras
require_once('selects/main/main.php');
// Mas publicaciones
require_once('selects/morepost/morepost.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astronomia, Educaci&oacute;n y Tecnolog&iacute;a | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="row section col s12">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- Email para notificaciones -->
        <?php require_once('aside/aside.php') ?>
        <!-- Content -->
        <?php require_once('main/main.php') ?>
        <!-- Las mas leidas -->
        <?php require_once('moreview/moreview.php') ?>
        <!-- More -->
        <?php require_once('main/more.php') ?>
    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>