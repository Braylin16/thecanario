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
    <meta name="keywords" content="blog, noticias, cambios">
    <meta name="description" content="En esta sesion se daran las noticias y anunciaran cambios de la web">
    <meta name="robots" content="noindex" />
    <title>Ultimas noticias y blog oficial de The Canario | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Ultimas noticias y blog oficial de The Canario">
    <meta property="og:description" content="En esta sesion se daran las noticias y anunciaran cambios de la web">
    <meta property="og:image" content="<?=$url?>/images/canario.webp">
    <meta property="og:url" content="<?=$url?>">
    <meta property="og:type" content="website">

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container row section col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class='col s12 white z-depth-1 section'>
            <h1 class="flow-text center">
               Noticias y nuestras &uacute;ltimas actualizaciones de <strong>The Canario</strong>
            </h1>

            <article>
                <h2 class="flow-text">
                    The canario ya fue lanzada con &eacute;xito al mundo de la Internet
                </h2>

                <p>
                    Hemos lanzado con exito este 20 de Julio de 2021 el sitio web <b>The Canario</b>, aunque estamos esperimentando pequeños cambios en la pagina ya estamos escribiendo para toda nuestra audiencia de forma constante.
                </p>

                <p>
                    Nuestra meta es hacer crecer nuestro sitio web y solo con la ayuda de nuestros lectores lo podremos conseguir, es por eso que tratamos de ofrecer el mejor contenido y estar al margen al ofrecer la mejor esperiencia de usuario a todos nuestros lectores.
                </p>
            </article>

            <h3 class="flow-text">
                Todas nuestras noticias he informaciones seran publicadas en esta sesi&oacute;n de blog
            </h3>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="materialize/js/materialize.min.js"></script>
</html>