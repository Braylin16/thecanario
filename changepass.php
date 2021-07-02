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
        <!-- ModelLogin -->
        <?php require_once('modals/login.php') ?>

        <section class="section row col s12 z-depth-1">

            <h1 class="flow-text center">Edita tu contrase&ntilde;a</h1>
            <div class="divider"></div>

            <form class="col s12" method="POST">
                <div class="row">

                    <!-- Nombre -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_open</i>
                        <input id="pass" type="password" class="validate">
                        <label for="pass">Nueva contrase&ntilde;a</label>
                    </div>

                    <!-- Apellido -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="repitpass" type="password" class="validate">
                        <label for="repitpass">Repite la contrase&ntilde;a</label>

                        <!-- Boton -->
                        <button class="btn waves-effect green right" type="submit" name="action">Actualizar
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