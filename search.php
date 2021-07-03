<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda | The Canario</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class="row">
                <h1 class="flow-text center">5 resultados</h1>
                <div class="divider"></div>

                <article class="col s12">

                    <p class='col s6 m4 xl3'>
                        <img src="images/astronomia.jpg" alt="titulo del articulo" class="img-adaptable" width="190" height="170">
                    </p>

                    <div class="col s6 m8 xl9">
                        <h2 class="flow-text">Sin fútbol ni apretones de manos: las prohibiciones de los pioneros soviéticos</h2>
                        <span class="grey-text">210 Visitas</span><br>
                        <span class="green-text text-upper">Etiqueta</span>
                    </div>

                </article>

                <article class="col s12">

                    <p class='col s6 m4 xl3'>
                        <img src="images/astronomia.jpg" alt="titulo del articulo" class="img-adaptable" width="190" height="170">
                    </p>

                    <div class="col s6 m8 xl9">
                        <h2 class="flow-text">Sin fútbol ni apretones de manos: las prohibiciones de los pioneros soviéticos</h2>
                        <span class="grey-text">210 Visitas</span><br>
                        <span class="green-text">Etiqueta</span>
                    </div>

                </article>

                <article class="col s12">

                    <p class='col s6 m4 xl3'>
                        <img src="images/astronomia.jpg" alt="titulo del articulo" class="img-adaptable" width="190" height="170">
                    </p>

                    <div class="col s6 m8 xl9">
                        <h2 class="flow-text">Sin fútbol ni apretones de manos: las prohibiciones de los pioneros soviéticos</h2>
                        <span class="grey-text">210 Visitas</span><br>
                        <span class="green-text">Etiqueta</span>
                    </div>

                </article>

                <article class="col s12">

                    <p class='col s6 m4 xl3'>
                        <img src="images/astronomia.jpg" alt="titulo del articulo" class="img-adaptable" width="190" height="170">
                    </p>

                    <div class="col s6 m8 xl9">
                        <h2 class="flow-text">Sin fútbol ni apretones de manos: las prohibiciones de los pioneros soviéticos</h2>
                        <span class="grey-text">210 Visitas</span><br>
                        <span class="green-text">Etiqueta</span>
                    </div>

                </article>

                <article class="col s12">

                    <p class='col s6 m4 xl3'>
                        <img src="images/astronomia.jpg" alt="titulo del articulo" class="img-adaptable" width="190" height="170">
                    </p>

                    <div class="col s6 m8 xl9">
                        <h2 class="flow-text">Sin fútbol ni apretones de manos: las prohibiciones de los pioneros soviéticos</h2>
                        <span class="grey-text">210 Visitas</span><br>
                        <span class="green-text">Etiqueta</span>
                    </div>

                </article>
        </section>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>