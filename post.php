<?php session_start();
require_once('connection/connection.php');
$email = $_SESSION['email'];
require_once('functions/functions.php');
require_once('user/user.php');
require_once('url/url.php');
require_once('backend/post.php');

// Si no esta logueado | Redireccionar
logueado();
// Si no es tipo admin | Lo redirije
noAdmin($roll, $url);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entrada | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
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

        <section class="section row col s12 z-depth-1">

        <!-- Imprimir los errores -->
        <?php if(count($errors) > 0) : ?>
                <ol>
                    <?php foreach ($errors as $error) { ?>
                        <li class="red-text"><?php echo $error; ?></li>
                    <?php } ?>
                </ol>
            <?php endif ?>

            <p class="flow-text green white-text center"><?php if(isset($success)){echo $success;} ?></p>

            <div class="divider"></div>

            <form class="col s12" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <!-- Titulo -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">title</i>
                        <input id="title" type="text" name="title" value="<?php if(isset($_POST["title"])){echo $title;} ?>" class="validate" minlength="21" data-length="70" maxlength="70" autocomplete="off" required>
                        <label for="title">Titulo</label>
                    </div>

                    <!-- Contenido de la entrada -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">web</i>
                        <textarea id="body" name="body" class="materialize-textarea white" placeholder="Escribe un excelente articulo"><?php if(isset($_POST["body"])){echo $body;} ?></textarea>
                    </div>

                    <!-- Imagen -->
                    <div class="input-field col s12">
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons black-text">image</i></span>
                                <input type="file" name="img" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="img" type="text" placeholder="Selecciona una imagen">
                            </div>
                        </div>
                    </div>

                    <!-- Imagen description -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <input id='imgDesc' type="text" name="imgDesc" value="<?php if(isset($_POST["imgDesc"])){echo $imgDesc;} ?>" class="validate" maxlength="100" required>
                        <label for="imgDesc">descripci&oacute;n de la imagen</label>
                    </div>

                    <!-- Descripcion -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <input id="input_text" type="text" name="description" value="<?php if(isset($_POST["description"])){echo $desc;} ?>" class="validate" data-length="100" minlength="70" maxlength="100" required>
                        <label for="input_text">Descripci&oacute;n</label>
                    </div>

                    <!-- Categoria -->
                    <div class="input-field col s12">
                        <select name="category">
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
                        <input id="tags" type="text" name="tags" value="<?php if(isset($_POST["tags"])){echo $tags;} ?>" class="validate" required>
                        <label for="tags">Palabras claves (Separar con ",")</label>
                    </div>

                    <!-- Boton -->
                    <div class="input-field col s12">
                        <button class="btn waves-effect green right" type="submit" name="submit">
                            Publicar entrada
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