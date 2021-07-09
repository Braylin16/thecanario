<?php session_start();

// Requeriemintos
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');
require_once('backend/suscribe.php');

// Si no ha iniciado sesion, se sacdar datos del usuario
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}

// Si no nos llega ningun id, nos redirige al inicio
if(!isset($_GET['id'])){
    header("Location: $url");
}

$id_post = $_GET['id'];
$id_post = (int)$id_post;

$id_postN = is_numeric($id_post);
if($id_postN == false){
    header("Location: $url");
}

// Seleccionar los datos del articulo en base id que nos llega por get
require_once('selects/article/article.php');
// Selecionar las publicaciones de "Mas publicaciones"
require_once('selects/article/morepub.php');
// Insertar los comentarios
require_once('backend/comments.php');
// Selecionar todos los comentarios
require_once('selects/comments/comments.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo del articulo | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
</head>
<body class="grey lighten-4">
    <?php require_once('frontend/header.php') ?>

    <main class="row section col s12">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- Contenido del articulo -->
        <?php require_once('pub/main.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('pub/morepub.php') ?>
        <!-- suscribirse a nuestro correo -->
        <?php require_once('pub/suscribe.php') ?>
        <!-- Comentarios -->
        <?php require_once('pub/comments.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>