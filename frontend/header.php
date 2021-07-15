<?php require_once('url/url.php') ?>
<!-- Header -->
<header>
    <!-- Dropdown -->
    <?php require_once('./dropdown/header.php') ?>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="lime lighten-5">

            <div class="nav-wrapper">

                <!-- Boton para aparecer el menu | Sidenav -->
                <a href="#" data-target="slide-out" class="sidenav-trigger">
                    <i class="material-icons black-text">menu</i>
                </a>

                <!-- Titulo -->
                <a href="<?=$url?>" class="brand-logo black-text">
                    <strong>The Canario</strong>
                </a>
                
                <ul class="right hide-on-med-and-down">

                    <!-- Buscador -->
                    <li id="input-search">
                        <div class="row">
                            <form action="./search" method="GET" class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="search-header" name="search" type="search" placeholder="Buscar..." class="validate" autocomplete="off">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Boton de inicio -->
                    <li>
                        <a href="<?=$url?>">
                            <span class="black-text">Inicio</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?=$url?>/astronomia">
                            <span class="black-text">Astronomía</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?=$url?>/tecnologia">
                            <span class="black-text">Tecnolog&iacute;a</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?=$url?>/historia">
                            <span class="black-text">Historia</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?=$url?>/otros">
                            <span class="black-text">Otros</span>
                        </a>
                    </li>

                    <!-- Si el usuario esta logueado | ocultarlo -->
                    <?php if(!isset($_SESSION['email'])) : ?>
                        <li>
                            <a class="green-text" href="login">
                                <b>Entrar</b>
                            </a>
                        </li>

                        <li>
                            <a href="<?=$url?>/register">
                                <b class="green-text">Unirse</b>
                            </a>
                        </li>
                    <?php endif ?><!-- Fin de la condicion -->

                    <!-- Foto de perfil del usuario -->
                    <?php if(isset($_SESSION['email'])) : ?>
                        <li>
                            <a class='dropdown-trigger' href='#' data-target='dropdown1'>
                                <?php if($photo == false) : ?>
                                    <img src="images/usuario.png" class="img-adaptable circle img-dropdown" alt="<?=$name?>" height='30' width='30' />
                                <?php else : ?>
                                    <img src="img-profile/<?=$photo?>" class="img-adaptable circulo img-dropdown" alt="<?=$name?>" height='30' width='30' />
                                <?php endif ?>
                                <i class="material-icons black-text right">arrow_drop_down</i>
                            </a>
                        </li>
                    <?php endif ?>

                </ul>

            </div>
        </nav>
    </div>
</header> <!-- End Header -->