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
require_once('backend/search.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$search?> | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>

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

    <main class="container">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class="row">
            <h1 class="flow-text center">Resultados de busqueda: <b class='blue-text'><?=$search?></b></h1>
            <?php if(isset($errors)) : ?>
                <p class="flow-text red white-text center"><?=$errors?></p>
            <?php endif ?>
            <div class="divider"></div>

            <?php foreach($result as $post) : ?>
                <article class="col s12">
                    <a href="article/<?=$post['id_post']?>/<?=clearUrl($post['title'])?>">
                        <p class='col s6 m4 xl3'>
                            <img src="img/<?=$post['miniatura']?>" alt="<?=$post['title']?>" class="img-adaptable" width="190" height="170">
                        </p>

                        <div class="col s6 m8 xl9">
                            <h2 class="flow-text black-text"><?=$post['title']?></h2>
                            <span class="grey-text"><?=$post['view']?> Visitas</span><br>
                            <span class="green-text text-upper"><?=$post['category']?></span>
                        </div>
                    </a>
                </article>
            <?php endforeach ?>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>