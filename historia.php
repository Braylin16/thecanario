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
require_once('selects/historia/historia.php');
// Seleccionar mas articulos mas popular
require_once('selects/historia/moreview.php');

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Las historias m&aacute;s interesantes y educativas par tu mente</title>

    <!-- Metas -->
    <meta name="keywords" content="Historias, Civilizaciones, Leyendas antiguas, Culturas, Mitos">
    <meta name="description" content="Disfruta de las mejores historias de textos, antiguas leyendas de antiguas civilizaciones, costumbres y culturas antiguas que educar&aacute;n tu mente">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="<?=$url?>/historia" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Disfruta de todas nuestras historias disponibles">
    <meta property="og:description" content="Las historias m&aacute;s interesantes sobre todos los temas">
    <meta property="og:image" content="<?=$url?>/images/historia.jpg">
    <meta property="og:url" content="<?=$url?>/historia">
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
        <?php require_once('historia_carp/parallax.php') ?>
        <!-- Los post mas populares -->
        <?php require_once('historia_carp/populares.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('historia_carp/publication.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>