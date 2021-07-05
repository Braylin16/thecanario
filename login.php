<?php require_once('connection/connection.php') ?>
<?php require_once('backend/login.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial sesi&oacute;n | The Canario</title>
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

            <h1 class="flow-text center">Inicial sesi&oacute;n para tener m&aacute;s privilegios</h1>

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