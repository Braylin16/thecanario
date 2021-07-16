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
require_once('selects/otros/otros.php');
// Seleccionar mas articulos mas popular
require_once('selects/otros/moreview.php');

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Otras categorias y lecturas interesantes | The Canario</title>

    <!-- Metas -->
    <meta name="keywords" content="Mus&iacute;ca, Autos, Playas, Paisajes, Culturas">
    <meta name="description" content="Aprende culturas y los lugares m&aacute;s hermosos del mundo además de playas y hermosos paisajes">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />

    <!-- Links -->
    <link rel="canonical" href="<?=$url?>/otros" />
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
    <meta property="og:title" content="Articulos de todas las categorias">
    <meta property="og:description" content="Disfruta de todas nuestras categorias y de diversos temas interesantes">
    <meta property="og:image" content="<?=$url?>/images/otros.jpg">
    <meta property="og:url" content="<?=$url?>/otros">
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
        <?php require_once('otros_carp/parallax.php') ?>
        <!-- Los post mas populares -->
        <?php require_once('otros_carp/populares.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('otros_carp/publication.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>