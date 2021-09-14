<?php

require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('backend/login.php');

// Si esta logueado | redireccionarlo
initSesion();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesi&oacute;n | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Metas -->
    <meta name="description" content="Inicia sesi&oacute;n para realizar opiniones y disfrutar del contenido m&aacute;s educativo">

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Iniciar sesi&oacute;n">
    <meta property="og:description" content="Inicia sesi&oacute;n para poder escribir comentarios en nuestras publicaciones">
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

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container section">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class="section row col s12 z-depth-1">

            <h1 class="flow-text center">Inicia Sesi&oacute;n</h1>

            <p class="flow-text red white-text center"><?php if(isset($error)){echo $error;} ?></p>

            <form class="col s12" method="POST">
                <div class="row">

                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="emailLogin" type="email" name="emailLogin" value="<?php if(isset($_POST["email"])){echo $email;} ?>" class="validate" required>
                        <label for="emailLogin">Correo electr&oacute;nico</label>
                    </div>

                    <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="passLogin" type="password" name="passLogin" class="validate" required>
                    <label for="passLogin">Contrase&ntilde;a</label>

                    <!-- Checkbox -->
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" value="acept" name="chek" />
                            <span>Mantener mi sesi&oacute;n iniciada en este dispositivo</span>
                        </label>
                    </p>

                    <!-- Boton -->
                    <button class="btn waves-effect green right" type="submit" name="login">Entrar
                        <i class="material-icons left">near_me</i>
                    </button>

                    </div>
                    
                </div>
            </form>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>