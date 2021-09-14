<?php session_start(); 
require_once('connection/connection.php');

// Recordar la sesion
require_once('remenber/remenber.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}

require_once('backend/contact.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>Comunicate con nosotros | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Metas -->
    <meta name="description" content="Si tiene cualquier duda o quieres saber m&aacute;s sobre nosotros estamos atento para responder sus dudas">

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container section">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class="section row col s12 z-depth-1">

            <h1 class="flow-text center">Cont&aacute;ctenos</h1>
                <p class="center">
                    Nuestro equipo se pondrá en contacto con usted en el menor tiempo posible.
                    Trate de explicarnos de manera contundente su inquietud.
                </p>

                <!-- Imprimir los errores -->
                <?php if(count($errors) > 0) : ?>
                    <ol>
                        <?php foreach ($errors as $error) { ?>
                            <li class="red-text"><?php echo $error; ?></li>
                        <?php } ?>
                    </ol>
                <?php endif ?>

                <!-- Imprimir el msg de exito -->
                <?php if(isset($success)) : ?>
                    <p class="flow-text green white-text center"><?=$success?></p>
                <?php endif ?>

            <div class="divider"></div>

            <form class="col s12" method="POST">
                <div class="row">

                    <!-- Nombre -->
                    <div class="input-field col s12 m6 l6 xl6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" type="text" name="name" value="<?php if(isset($_POST["name"])){echo $name;} ?>" class="validate" required>
                        <label for="name">name</label>
                    </div>

                    <!-- Apellido -->
                    <div class="input-field col s12 m6 l6 xl6">
                        <i class="material-icons prefix">assignment</i>
                        <input id="assunt" type="text" name="assunt" value="<?php if(isset($_POST["assunt"])){echo $assunt;} ?>" class="validate" required>
                        <label for="assunt">Asunto</label>
                    </div>

                    <!-- Email -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email" name="email_c" value="<?php if(isset($_POST["email_c"])){echo $email_c;} ?>" class="validate" required>
                        <label for="email">Correo elctr&oacute;nico</label>
                    </div>

                    <!-- Comentario -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="text" name="text" class="materialize-textarea" required><?php if(isset($_POST["text"])){echo $text;} ?></textarea>
                        <label for="text">En que podemos ayudarte ?</label>
                    </div>

                    <!-- Boton -->
                    <div class="input-field col s12">
                        <button class="btn waves-effect green right" type="submit" name="submit">Enviar
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