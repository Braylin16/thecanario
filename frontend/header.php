<?php require_once('url/url.php') ?>
<!-- Header -->
<header>
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
                            <form action="" method="GET" class="col s12">
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
                        <a href="astronomia">
                            <span class="black-text">Astronomía</span>
                        </a>
                    </li>

                    <li>
                        <a href="tecnologia">
                            <span class="black-text">Tecnolog&iacute;a</span>
                        </a>
                    </li>

                    <li>
                        <a href="historia">
                            <span class="black-text">Historia</span>
                        </a>
                    </li>

                    <li>
                        <a href="otros">
                            <span class="black-text">Otros</span>
                        </a>
                    </li>

                    <li>
                        <a class="green-text" href="login">
                            <b>Entrar</b>
                        </a>
                    </li>

                    <li>
                        <a href="register">
                            <b class="green-text">Unirse</b>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</header> <!-- End Header -->