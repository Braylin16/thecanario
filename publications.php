<?php session_start();
require_once('connection/connection.php');
$email = $_SESSION['email'];
require_once('functions/functions.php');
require_once('user/user.php');
require_once('url/url.php');
require_once('selects/mypublications.php');

// Si no esta logueado | Redireccionar
logueado();
noAdmin($roll, $url);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones realizadas por mi | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
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
        <!-- Modal Eliminar -->
        <?php require_once('modals/delete-entrada.php') ?>

        <section class="row">
            <h1 class="flow-text center">Todas mis publicaciones</h1>
            <div class="divider"></div>

            <?php foreach($mypost as $post) : ?>

                <?php
                
                // Convertir el titulo a una URL
                $titleURL = str_replace(' ', '-', $post['title']);
                $titleURL = strtolower($titleURL);
                
                ?>

                <article class="col s12">

                    <a href="article/<?=$post['id_post']?>/<?=$titleURL?>">
                        <p class='col s6 m4 xl3'>
                            <img src="img/<?=$post['miniatura']?>" alt="<?=$post['title']?>" class="img-adaptable" width="190" height="170">
                        </p>
                    </a>

                    <div class="col s6 m8 xl9">
                        <a href="article/<?=$post['id_post']?>/<?=$titleURL?>">
                            <h2 class="flow-text black-text">
                                <?=$post['title']?>
                            </h2>
                        </a>

                        <!-- Editar -->
                        <a href="edit-post" class="waves-effect yellow btn"><i class="material-icons left">edit</i>Editar entrada</a>

                        <!-- Eliminar -->
                        <a class="waves-effect red btn"><i class="material-icons left">delete</i>Eliminar entrada</a>
                    </div>

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