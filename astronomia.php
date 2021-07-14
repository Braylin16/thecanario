<?php session_start(); 
require_once('connection/connection.php');
require_once('functions/functions.php');
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}

// Seleccionar mas articulos de Astronomia
require_once('selects/astronomia/astronomia.php');
// Seleccionar mas articulos mas popular
require_once('selects/astronomia/moreview.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disfruta de interesantes lecturas de Astronomia | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="row col s12">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- Parallax -->
        <?php require_once('astronomia_carp/parallax.php') ?>
        <!-- Los post mas populares -->
        <?php require_once('astronomia_carp/populares.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('astronomia_carp/publication.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>