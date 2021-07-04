<?php session_start();
require_once('connection/connection.php');
$email = $_SESSION['email'];
require_once('functions/functions.php');
require_once('user/user.php');
require_once('backend/changepass.php');

// Si no esta logueado | Redireccionar
logueado();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contrase&ntilde;a | The Canario</title>
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

            <h1 class="flow-text center">Edita tu contrase&ntilde;a</h1>

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
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_open</i>
                        <input id="pass" type="password" name="pass" class="validate" required>
                        <label for="pass">Nueva contrase&ntilde;a</label>
                    </div>

                    <!-- Apellido -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="repitpass" type="password" name="passRepit" class="validate" required>
                        <label for="repitpass">Repite la contrase&ntilde;a</label>
                    </div>

                        <!-- Boton -->
                    <div class="input-field col s12">
                        <button class="btn waves-effect green right" type="submit" name="submit">Actualizar
                            <i class="material-icons left">edit</i>
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