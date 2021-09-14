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

// Suscribirse con el correo electronico
require_once('backend/suscribe.php');
// Selecionar los datos de las primeras 3 entras
require_once('selects/main/main.php');
// Mas publicaciones
require_once('selects/morepost/morepost.php');
// Mas leidas
require_once('selects/main/moreview.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="keywords" content="Astronomía, Educación, Historia, Tecnología, Blog">
    <meta name="description" content="En este blog disfrutaras de los mejores artículos de Astronomía, historias y tecnología con la finalidad de que aprendas nuevos conocimientos educativos">
    <meta name="author" content="Dailin Ivan Payano" />
    <meta name="owner" content="Dailin Ivan Payano" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="JczWepMq--cGVUuVLi77aIe5AexsTYKntaGUVqR2Zqo" />
    <title>The Canario es un blog educativo para aprender cosas nuevas</title>
    <link rel="canonical" href="<?=$url?>" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Blog de Ciencias, Tecnolog&iacute;as y educaci&oacute;n">
    <meta property="og:description" content="El contenido mas nutritivo para tu mente disponible en The Canario">
    <meta property="og:image" content="<?=$url?>/images/canario.webp">
    <meta property="og:url" content="<?=$url?>">
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

    <!-- Google AdSense -->
    <script data-ad-client="ca-pub-4078763466234277" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="row section col s12">
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