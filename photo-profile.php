<?php session_start();
require_once('connection/connection.php');
$email = $_SESSION['email'];
require_once('functions/functions.php');
require_once('user/user.php');
require_once('backend/photo-profile.php');

// Si no esta logueado | Redireccionar
logueado();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coloca una foto de perfil | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container section">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class="section row col s12 z-depth-1">

            <h1 class="flow-text center">Agrega una foto de perfil</h1>

            <!-- Imprimir los errores -->
            <?php if(count($errors) > 0) : ?>
                <ol>
                    <?php foreach ($errors as $error) { ?>
                        <li class="red-text"><?php echo $error; ?></li>
                    <?php } ?>
                </ol>
            <?php endif ?>

            <p class="flow-text green white-text center"><?php if(isset($success)){echo $success;} ?></p>

            <div class="divider"></div><br>

            <div class="center">
                <?php if($photo == false) : ?>
                    <img src="images/usuario.png" class="img-adaptable circle" alt="Foto de perfil" height="160">
                <?php else : ?>
                    <img src="img-profile/<?=$photo?>" class="img-adaptable" alt="<?=$name.' '.$surname?>" height="160">
                <?php endif ?>
            </div>

            <form method="POST" enctype="multipart/form-data">
                <div class="file-field input-field">
                <div class="btn green">
                    <span><i class="material-icons black-text">image</i></span>
                    <input type="file" name="img" accept="image/*" required>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="img" type="text" placeholder="Seleciona una foto para tu perfil">
                </div>
                </div>

                <!-- Boton -->
                <button class="btn waves-effect green right" type="submit" name="submit">Enviar
                    <i class="material-icons left">near_me</i>
                </button>
            </form>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>