<?php session_start();
require_once('connection/connection.php');
$email = $_SESSION['email'];
require_once('functions/functions.php');
require_once('user/user.php');
require_once('url/url.php');

// Si no nos llega ningun id, nos redirige al inicio
if(!isset($_GET['id'])){
    header("Location: $url");
}

$id_post = $_GET['id'];
$id_post = (int)$id_post;

$id_postN = is_numeric($id_post);
if($id_postN == false){
    header("Location: $url");
}

require_once('selects/article/edit-post.php');
require_once('backend/edit-post.php');

// Si no esta logueado | Redireccionar
logueado();
noAdmin($roll, $url);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>Editar entrada | The Canario</title>
    <base href="<?=$url?>/">
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

            <form class="col s12" method="POST" enctype="multipart/form-data">
                <h1 class="flow-text center">Editar entrada</h1>

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

                <div class="row">

                <?php foreach($stmt as $edit) : ?>
                    <!-- Titulo -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">title</i>
                        <input id="title" type="text" class="validate" name='title' value="<?=$edit['title']?>" minlength="21" data-length="70" maxlength="70" autocomplete="off" required>
                        <label for="title">Titulo</label>
                    </div>

                    <!-- BBCode -->
                    <div class="input-field col s12">

                        <button id="strong" type="button" class="waves-effect pink darken-2 btn">
                            strong
                        </button>

                        <button id="b" type="button" class="waves-effect pink darken-2 btn">
                            b
                        </button>

                        <button id="a" type="button" class="waves-effect pink darken-2 btn">
                            a
                        </button>

                        <button id="h2" type="button" class="waves-effect pink darken-2 btn">
                            h2
                        </button>

                        <button id="h3" type="button" class="waves-effect pink darken-2 btn">
                            h3
                        </button>

                    </div>

                    <!-- Contenido de la entrada -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">web</i>
                        <textarea id="body" class="materialize-textarea white" name='body' placeholder="Escribe un excelente articulo" required><?=$edit['entrada']?></textarea>
                    </div>

                    <!-- Imagen -->
                    <div class="input-field col s12">
                        <div class="file-field input-field">
                            <div class="btn green">
                                <span><i class="material-icons black-text">image</i></span>
                                <input type="file" name='img' value="<?=$edit['miniatura']?>" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name='img' value="<?=$edit['miniatura']?>" type="text" placeholder="Selecciona una imagen">
                            </div>
                        </div>
                    </div>

                    <!-- Descripcion Imagen -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <input id="descImg" type="text" name='descImg' value="<?=$edit['img_description']?>" class="validate" minlength="70" maxlength="100" required>
                        <label for="descImg">Descripci&oacute;n de la imagen</label>
                    </div>


                    <!-- Descripcion -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">description</i>
                        <input id="input_text" type="text" name='desc' value="<?=$edit['description_post']?>" class="validate" data-length="160" minlength="70" maxlength="160" required>
                        <label for="input_text">Descripci&oacute;n</label>
                    </div>

                    <!-- Categoria -->
                    <div class="input-field col s12">
                        <select name='category' required>
                            <option value="" disabled selected>Elige una categoria</option>
                            <option value="Astronomia">Astronomia</option>
                            <option value="Tecnolog??a">Tecnolog&iacute;a</option>
                            <option value="Historia">Historia</option>
                            <option value="Otros">Otros</option>
                            <option value="<?=$edit['category']?>" selected><?=$edit['category']?></option>
                        </select>
                        <label>Categoria</label>
                    </div>

                    <!-- Tags -->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_fields</i>
                        <input id="tags" type="text" name='tags' value="<?=$edit['tags']?>" class="validate" required>
                        <label for="tags">Palabras claves (Separar con ",")</label>
                    </div>
                <?php endforeach ?>

                    <!-- Boton -->
                    <div class="input-field col s12">
                        <button class="btn waves-effect green right" type="submit" name="submit">Editar entrada
                            <i class="material-icons left">edit</i>
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
<script src='js/bbcode.js'></script>
<script src="materialize/js/materialize.min.js"></script>
</html>