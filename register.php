<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container section">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- ModelLogin -->
        <?php require_once('modals/login.php') ?>

        <section class="section row col s12 z-depth-1">

            <h1 class="flow-text center">Crear una cuenta es fac&iacute;l</h1>
            <p class="col s12">Al crear una cuenta en <strong>The Canario</strong> tendras mas privilegios dentro de la plataforma que un lector normal a la vez que podras disfrutar de una gran experiencia de usuario</p>

            <form class="col s12" method="POST">
                <div class="row">

                    <!-- Nombre -->
                    <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text" class="validate">
                    <label for="name">name</label>
                    </div>

                    <!-- Apellido -->
                    <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <input id="surname" type="text" class="validate">
                    <label for="surname">Apellidos</label>
                    </div>

                    <!-- Email -->
                    <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Correo elctr&oacute;nico</label>
                    </div>

                    <!-- Pass -->
                    <div class="input-field col s12">
                    <i class="material-icons prefix">https</i>
                    <input id="pass" type="password" class="validate">
                    <label for="pass">Contrase&ntilde;a</label>
                    </div>

                    <!-- PassRepit -->
                    <div class="input-field col s12">
                    <i class="material-icons prefix">https</i>
                    <input id="passRepit" type="password" class="validate">
                    <label for="passRepit">Repite la contrase&ntilde;a</label>

                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" />
                            <span>Al hacer click en "<b>Crear cuenta</b>" estas aceptando nuestros <a href="http://" target="_blank" rel="noopener noreferrer">t&eacute;rminos y condiciones</a></span>
                        </label>
                    </p>

                    <!-- Boton -->
                    <button class="btn waves-effect green right" type="submit" name="action">Crear cuenta
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