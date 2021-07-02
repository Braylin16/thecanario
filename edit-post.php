<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar entrada | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/data-leng.js"></script>
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container section">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- ModelLogin -->
        <?php require_once('modals/login.php') ?>

        <section class="section row col s12 z-depth-1">

            <form class="col s12" method="POST">
                <h1 class="flow-text center">Editar entrada</h1>
                <div class="row">

                    <!-- Titulo -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">title</i>
                        <input id="title" type="text" class="validate" minlength="21" data-length="70" maxlength="70" autocomplete="off" required>
                        <label for="title">Titulo</label>
                    </div>

                    <!-- Contenido de la entrada -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">web</i>
                        <textarea id="body" class="materialize-textarea white" placeholder="Escribe un excelente articulo"></textarea>
                    </div>

                    <!-- Imagen -->
                    <div class="input-field col s12">
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons black-text">image</i></span>
                                <input type="file" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Selecciona una imagen">
                            </div>
                        </div>
                    </div>

                    <!-- Descripcion -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <input id="input_text" type="text" class="validate" data-length="100" minlength="70" maxlength="100" required>
                        <label for="input_text">Descripci&oacute;n</label>
                    </div>

                    <!-- Categoria -->
                    <div class="input-field col s12">
                        <select>
                        <option value="" disabled selected>Elige una categoria</option>
                        <option value="Astronomia">Astronomia</option>
                        <option value="Tecnología">Tecnolog&iacute;a</option>
                        <option value="Historia">Historia</option>
                        <option value="Otros">Otros</option>
                        </select>
                        <label>Categoria</label>
                    </div>

                    <!-- Tags -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_fields</i>
                        <input id="tags" type="text" class="validate">
                        <label for="tags">Palabras claves (Separar con ",")</label>
                    </div>

                    <!-- Boton -->
                    <div class="input-field col s12">
                        <button class="btn waves-effect green right" type="submit" name="action">Publicar entrada
                            <i class="material-icons left">near_me</i>
                        </button>
                    </div>

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