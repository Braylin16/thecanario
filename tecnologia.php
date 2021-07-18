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
require_once('selects/tecnologia/tecnologia.php');
// Seleccionar mas articulos mas popular
require_once('selects/tecnologia/moreview.php');

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Las &uacute;ltimas noticias de tecnolog&iacute;a a tu alcance | The Canario</title>

    <!-- Metas -->
    <meta name="description" content="Si eres un apacionando por la tecnologia este es el sitio perfecto para aprender, estar al dia o para apacionarte de este incre&iacute;ble mundo">
    <meta name="keywords" content="Tecnolog&iacute;a, Programaci&oacute;n, Dispositivos, Red, SEO">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="<?=$url?>/tecnologia" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Todos sobre tecnolog&iacute;a">
    <meta property="og:description" content="Disfruta de todas nuestras categorias y de diversos temas interesantes">
    <meta property="og:image" content="<?=$url?>/images/tecnologia.webp">
    <meta property="og:url" content="<?=$url?>/tecnologia">
    <meta property="og:type" content="website">

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="row col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- Parallax -->
        <?php require_once('tecnologia_carp/parallax.php') ?>
        <!-- Los post mas populares -->
        <?php require_once('tecnologia_carp/populares.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('tecnologia_carp/publication.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>