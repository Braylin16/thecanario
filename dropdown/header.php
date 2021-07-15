<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
    <?php if(isset($roll) AND $roll === 'Admin') : ?>
        <!-- Subir un post -->
        <li>
            <a href="post" class="black-text">
                <i class="material-icons">publish</i>
                Crear un post
            </a>
        </li>

        <!-- Mis post -->
        <li>
            <a href="publications" class="black-text">
                <i class="material-icons">public</i>
                Mis publicaciones
            </a>
        </li>
    <?php endif ?>
    
    <li class="divider" tabindex="-1"></li>
    <li><a href="photo-profile" class="black-text"><i class="material-icons">image</i>Foto de perfil</a></li>
    <li><a href="setting" class="black-text"><i class="material-icons">settings</i>Configuraci&oacute;n</a></li>
    <li><a href="changepass" class="black-text"><i class="material-icons">edit</i>Contrase&ntilde;a</a></li>
    <li><a href="logout" class="black-text"><i class="material-icons">exit_to_app</i>Salir</a></li>
</ul>