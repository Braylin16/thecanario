<ul id="slide-out" class="sidenav">
    <li><a href="<?=$url?>"><i class="material-icons">home</i>Inicio</a></li>

    <!-- Si el usuario esta logueado | Ocultarlo -->
    <?php if(!isset($_SESSION['email'])) : ?>
        <li><a class="green-text" href="login"><i class="material-icons">person</i><b>Entrar</b></a></li>
        <li><a href="register" class="green-text"><i class="material-icons">person_add</i>Registrarse</a></li>
    <?php endif ?>

    <!-- Si el usuario no esta logueado | Ocultarlo -->
    <?php if(isset($_SESSION['email'])) : ?>
        <li><a href="post"><i class="material-icons">publish</i>Crear una entrada</a></li>
        <li><a href="publications"><i class="material-icons">public</i>Mis pubicaciones</a></li>
        <li><a href="photo-profile"><i class="material-icons">image</i>Foto de perfil</a></li>
        <li><a href="setting"><i class="material-icons">settings</i>Configuraci&oacute;n</a></li>
        <li><a href="changepass"><i class="material-icons">edit</i>Cambiar contrase&ntilde;a</a></li>
        <li><a href="logout"><i class="material-icons">exit_to_app</i>Salir</a></li>
    <?php endif ?>

    <li><div class="divider"></div></li>
    <li><a class="subheader">Categorias</a></li>
    <li><a href="astronomia" class="waves-effect" href="#!">Astronom&iacute;a</a></li>
    <li><a href="tecnologia" class="waves-effect" href="#!">Tecnolog&iacute;a</a></li>
    <li><a href="historia" class="waves-effect" href="#!">Historia</a></li>
    <li><a href="otros" class="waves-effect" href="#!">Otros</a></li>
</ul>