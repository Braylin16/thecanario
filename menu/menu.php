<ul id="slide-out" class="sidenav">
    <li><a href="<?=$url?>"><i class="material-icons">home</i>Inicio</a></li>

    <!-- Si el usuario esta logueado | Ocultarlo -->
    <?php if(!isset($_SESSION['email'])) : ?>
        <!-- Login -->
        <li>
            <a class="green-text" href="<?=$url?>/login">
                <i class="material-icons">person</i>
                <b>Entrar</b>
            </a>
        </li>

        <!-- Register -->
        <li>
            <a href="<?=$url?>/register" class="green-text">
                <i class="material-icons">person_add</i>
                <b>Registrarse</b>
            </a>
        </li>
    <?php endif ?>

    <!-- Si el usuario no esta logueado | Ocultarlo -->
    <?php if(isset($_SESSION['email'])) : ?>

        <?php if($roll == 'Admin') : ?>
            <!-- Crear entrada -->
            <li>
                <a href="<?=$url?>/post">
                    <i class="material-icons">publish</i>
                    Crear una entrada
                </a>
            </li>

            <!-- Mis posts -->
            <li>
                <a href="<?=$url?>/publications">
                    <i class="material-icons">public</i>
                    Mis pubicaciones
                </a>
            </li>
        <?php endif ?>

        <li><a href="<?=$url?>/photo-profile"><i class="material-icons">image</i>Foto de perfil</a></li>
        <li><a href="<?=$url?>/setting"><i class="material-icons">settings</i>Configuraci&oacute;n</a></li>
        <li><a href="<?=$url?>/changepass"><i class="material-icons">edit</i>Cambiar contrase&ntilde;a</a></li>
        <li><a href="<?=$url?>/logout"><i class="material-icons">exit_to_app</i>Salir</a></li>
    <?php endif ?>

    <li><div class="divider"></div></li>
    <li><a class="subheader">Categorias</a></li>
    <li><a href="astronomia" class="waves-effect" href="<?=$url?>/astronomia">Astronom&iacute;a</a></li>
    <li><a href="tecnologia" class="waves-effect" href="<?=$url?>/tecnologia">Tecnolog&iacute;a</a></li>
    <li><a href="historia" class="waves-effect" href="<?=$url?>/historia">Historia</a></li>
    <li><a href="otros" class="waves-effect" href="<?=$url?>/otros">Otros</a></li>
</ul>