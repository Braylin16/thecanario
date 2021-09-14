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
    <title>Articulos de Astronom&iacute;a, Cosmos y Universo</title>

    <!-- Metas -->
    <meta name="description" content="Las lecturas m&aacute;s interesante sobre el universo, cosmos, agujeros negros y toda la materia del universo que te apasiona en el mundo de la Astronomia">
    <meta name="keywords" content="Astronom&iacute;a, Astronauta, Espacio, Cosmo, Planeta, Universo">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />

    <!-- Links -->
    <link rel="canonical" href="<?=$url?>/astronomia" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Astronom&iacute;a, viajes espaciales y todo lo relacionando con el universo">
    <meta property="og:description" content="Disfruta de interesantes articulos de astronom&iacute;a, planetas y posibles vida fuera de nuestro mundo">
    <meta property="og:image" content="<?=$url?>/images/astronomia.jpg">
    <meta property="og:url" content="<?=$url?>/astronomia">
    <meta property="og:type" content="website">

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1QL2EFLFP0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1QL2EFLFP0');
    </script>

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="row col s12">
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