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
    <meta name="keywords" content="Cookies">
    <meta name="description" content="The canario utliza Cookies para garantizar una mejor experiencia de usuario.">
    <meta name="robots" content="noindex" />
    <title>Cookies | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Cookies">
    <meta property="og:description" content="The canario utliza Cookies para garantizar una mejor experiencia de usuario.">
    <meta property="og:image" content="<?=$url?>/images/canario.webp">
    <meta property="og:url" content="<?=$url?>/cookies">
    <meta property="og:type" content="website">

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container row section col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class='col s12 white z-depth-1 section'>
            <h1 class="flow-text center">
                Cookies
            </h1>

            <p>
                Nuestro sitio web utiliza las denominadas Cookies, que se utilizan para hacer nuestro servicio más fácil de usar, eficaz y seguro. Las Cookies son pequeños archivos de texto que se almacenan en su ordenador y son guardadas por su navegador. La mayoría de los sitios web que visita utiliza Cookies con el fin de mejorar su experiencia de usuario al permitir que el sitio web le 'recuerde', ya sea para la duración de su visita o para unas visitas repetidas. Se utilizan por varios motivos, tales como guardar sus preferencias de búsqueda, ayudarle a registrarse para nuestros servicios o proporcionarle publicidad dirigida.
            </p>
            
            <p>
                Los datos sobre su uso de nuestro sitio web van a almacenarse en una Cookie con el objetivo de recuperarlos en caso de una nueva visita a nuestro sitio web. De esta manera, podemos identificarle durante su visita posterior y ajustar nuestros servicios a sus necesidades exactas. Usted puede prevenir o restringir el uso de Cookies en su navegador. Algunas de las Cookies que utilizamos son "Cookies de sesión", que se borran automáticamente después de su visita. Nuestras Cookies en su ordenador no hacen daño ni contienen ningún tipo de virus.
            </p>
        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>