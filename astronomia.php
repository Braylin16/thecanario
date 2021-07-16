<?php session_start(); 
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');

// Recordar la sesion
require_once('remenber/remenber.php');

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
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Disfruta de interesantes lecturas de Astronom&iacute;a | The Canario</title>

    <!-- Metas -->
    <meta name="description" content="Los articulos m&aacute;s interesantes de Astronom&iacute;a y ciencias ue rodean el universo disponibles aqu&iacute;">
    <meta name="keywords" content="Astronom&iacute;a, Astronauta, Espacio, Cosmo, Planeta, Cosmonauta">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />

    <!-- Links -->
    <link rel="canonical" href="<?=$url?>/astronomia" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Scripts -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Astronom&iacute;a, viajes espaciales y todo lo relacionando con el universo">
    <meta property="og:description" content="Disfruta de interesantes articulos de astronom&iacute;a, planetas y posibles vida fuera de nuestro mundo">
    <meta property="og:image" content="<?=$url?>/images/astronomia.jpg">
    <meta property="og:url" content="<?=$url?>/astronomia">
    <meta property="og:type" content="website">

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