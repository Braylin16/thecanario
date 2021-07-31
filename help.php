<?php session_start(); 
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="robots" content="noindex" />
    <title>Ayuda en the canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container row section col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class='col s12 white z-depth-1 section'>
            <h1 class="flow-text center">
                Ayuda en the canario
            </h1>
            <div class="divider"></div>
            
            <article>
                <p class="flow-text">Como subir una imagen de perfil</p>
                <p>Para subir una imagen de perfil solo vaya a <a href="photo-profile">foto de perfil</a> y puede selecionar una foto, solo admitimos imagenes con un peso menor a 2MB y en los formatos permitidos que son: jpg, jpeg, png, gif</p>
            </article>

            <article>
                <p class="flow-text">Publicar un comentario</p>
                <p>
                    Para publicar un comentario tienes que registrarte como usuario o iniciar sesion en caso de no tener la sesi&oacute;n iniciada y solo ya podr&aacute;s comentar en todos los articulos que tenemos disponibles.
                </p>
            </article>

            <article>
                <p class="flow-text">Tengo que iniciar sesi&oacute;n cada vez que entro a la p&aacute;gina</p>
                <p>
                    Si no quieres tener que estar iniciando sesi&oacute;n cada vez que entra al blog, entonces debe seleccionar la casilla que dice: recordar sesi&oacute;n en la p&aacute;gina donde inicias sesi&oacute;n en el login 
                </p>
            </article>

            <article>
                <p class="flow-text">Eliminar mi usuario</p>
                <p>
                    Hasta el momento no existe una pagina o boton donde puedas eliminar un usuario, por esa raz&oacute;n debes de <a href="contact">contactar con nosotro</a> y pedirnos que eliminemos tu usuario de nuestro sistema. 
                </p>
            </article>

            <article>
                <p class="flow-text">Eliminar un comentario</p>
                <p>
                    Si deseas eliminar un comentario entonces debes de <a href="contact">entrar en contacto con nosotros</a> para que eliminemos tu comentario o lo editemos, ya que por el momento no tenemos boton para eliminar ni tampoco editar comentarios.
                </p>
            </article>

        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>