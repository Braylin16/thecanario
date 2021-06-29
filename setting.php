<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar los datos de la cuenta | The Canario</title>
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

            <h1 class="flow-text center">Editar informaci&oacute;n de la cuenta</h1>
            <div class="divider"></div>

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