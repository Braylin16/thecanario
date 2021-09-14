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
    <meta name="keywords" content="Terminos, Condiciones, Uso, Privacidad">
    <meta name="description" content="Mantente al tanto de nuestros terminos y condiciones y nuestras pol&iacute;ticas de privacidad">
    <title>T&eacute;rminos y condiciones | The Canario</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />

    <!-- Redes Sociales -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Thecanario">
    <meta name="twitter:creator" content="@Thecanario">
    <meta property="og:title" content="Nuestros terminos y condiciones | Pol&iacute;tica de privacidad">
    <meta property="og:description" content="Mantente al tanto de nuestros terminos y condiciones y nuestras pol&iacute;ticas de privacidad">
    <meta property="og:image" content="<?=$url?>/images/canario.webp">
    <meta property="og:url" content="<?=$url?>">
    <meta property="og:type" content="website">

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1QL2EFLFP0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1QL2EFLFP0');
    </script>

</head>
<body class="grey lighten-5">
    <?php require_once('frontend/header.php') ?>

    <main class="container row section col s12">
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>

        <section class='col s12 white z-depth-1 section'>
            <h1 class="flow-text center">
                T&eacute;rminos, condiciones y pol&iacute;tica de privacidad
            </h1>

            <h2 class="flow-text">
                Contenido
            </h2>

            <ol>
                <li><a href="#introducion">Introduci&oacute;n</a></li>
                <li><a href="#uso">Uso de la p&aacute;gina web</a></li>
                <li><a href="#acept">Aceptaci&oacute;n de los t&eacute;rminos y condiciones</a></li>
                <li><a href="#privacidad">Pol&iacute;tica de privacidad de <b>thecanario.com</b></a></li>
                <li><a href="#visita">Visitas a la p&aacute;gina web</a></li>
                <li><a href="#procesamiento">Procesamiento de datos</a></li>
                <li><a href="#analytics">Google Analytics</a></li>
                <li><a href="#fonts">Google Fonts</a></li>
                <li><a href="#video">V&iacute;deos de redes sociales y YouTube insertados</a></li>
                <li><a href="#datos">Trasparencia de datos</a></li>
                <li><a href="#eliminar">Eliminaci&oacute;n de usuario</a></li>
                <li><a href="#herramientas">Imagenes utilizadas en las publicaciones</a></li>
            </ol>

            <!-- Introducion -->
            <article id='introducion'>
                <h3 class="flow-text">1. Introduci&oacute;n</h3>
                <p>
                    La p&aacute;gina web <b>thecanario.com</b> es un sitio web de entretenimiento sano y educativo. Al entrar al sitio web la persona esta aceptando nuestros t&eacute;rminos y condiciones. <b>thecanario.com</b> se reserva el derecho de cambiar los t&eacute;rminos en condiciones en cualquier momento por eso se le recomienda revisar los t&eacute;rminos y condiciones regularmente. Un uso continuado al sitio web con posterioridad a cambios de actualizaciones en los t&eacute;rminos y condiciones constituye a la aceptaci&oacute;n de los mismo.
                </p>
            </article>

            <!-- Introducion -->
            <article id='uso'>
                <h3 class="flow-text">2. Uso de la p&aacute;gina web</h3>
                <p>
                    Para proteger su credibilidad queda rotundamente prohibido la manipulaci&oacute;n de nuestra informaci&oacute;n en otros sitios web de terceros con edici&oacute;n y manipulaci&oacute;n de nuestra propia informaci&oacute;n. A la misma vez esta prohibido las palabras obscenas, insultos, comentarios racistas y las grosarias en la caja de comentarios que se encuentra en cada publicaci&oacute;n.
                </p>
            </article>

            <!-- Aceptacion de TC -->
            <article id='acept'>
                <h3 class="flow-text">3. Aceptaci&oacute;n de los t&eacute;rminos y condiciones</h3>
                <p>
                    Los presente t&eacute;rminos y condiciones entran en vigor al momento de entrar o visitar el sitio web. El uso del sitio web <b>thecanario.com</b> implica el conocimiento y plena aceptaci&oacute;n de los terminos, condiciones y uso del sitio. El usuario solo podra usar el sitio si este se compromete a aceptar los terminos sin ninguna condici&oacute;n
                </p>
            </article>

            <!-- privacidad -->
            <article id='privacidad'>
                <h3 class="flow-text">4. Pol&iacute;tica de privacidad de <b>thecanario.com</b></h3>
                <p>
                    En <b>thecanario.com</b> entendemos que tus datos personales son muy importantes y por tal raz&oacute;n no pedimos más datos de los que necesitamos. Por tal razon dividimos los datos en dos, unos son los datos que pedimos al usuario y otro son los datos que recogemos del navegador mientras visitas el sitio web.
                    <h4 class="flow-text">4.1 Datos que pedimos al usuario</h4>
                    <ol type='I'>
                        <li>Nombre</li>
                        <li>Apellidos</li>
                        <li>Correo electr&oacute;nico</li>
                        <li>Una foto para ser colocada de perfil</li>
                        <li>Una contrase&ntilde;a que el usuario puede crear</li>
                    </ol>
                    Estos datos son usados para mostrarlos en caso de que el usuario registrado en nuestro sistema decida publicar una opini&oacute;n en uno de nuestro articulos publicados. El <b>Correo electr&oacute;nico</b> es un dato que no lo mostramos en publico, solo lo usamos para enviar notificaciones por correo electr&oacute;nico.
                    <h4 class="flow-text">4.2 Datos que recopilamos del navegador</h4>
                    <ol type='a'>
                        <li>El navegador que estas usando ejemp.: <b>Firefox, Google Chrome, Edge etc..</b></li>
                        <li>Direcci&oacute;n IP</li>
                    </ol>
                    Estos datos son proporcionado por el navegador que utiliza el usuario lo recopilamos en una base de datos para mejorar la esperiencia de usuario y mejorar el sitio web.
                </p>
            </article>

            <!-- visita web -->
            <article id='visita'>
                <h3 class="flow-text">5. Visitas a la p&aacute;gina web</h3>
                <p>
                    Cuando visitas nuestra p&aacute;gina web: <a href="<?=$url?>"><?=$url?></a> recopilamos datos que estan descritos en la ses&iacute;on 4.2 y que son datos facilitados por el navegador que ustiliza el usuario.
                </p>
            </article>

            <!-- Procesamiento de datos -->
            <article id='visita'>
                <h3 class="flow-text">6.1 Procesamiento de datos</h3>
                <p>
                    Los datos de uso también incluyen la direcci&oacute;n de <b>IP</b> además de los datos de identificaci&oacute;n para entrar a una área segura del sitio web.
                </p>

                <h4 class="flow-text">6.2 Suscripci&oacute;n al correo electr&oacute;nico</h4>
                <p>
                    Si desides recibir nuestras publicaciones por correo electr&oacute;nico debe se facilitarnos su direcci&oacute;n de correo para recibir todas las semanas nuestras mejores publicaciones en modo de publicidad. Por medio de nuestro correo se puede cancelar en cualquier momento la suscripcion por correo electr&oacute;nico. Para suscribirte y recibir por correo nuestras publicaciones solo basta con escribir tu correo electr&oacute;nico y listo, no es necesario una confirmaci&oacute;n por correo.
                </p>

                <h4 class="flow-text">6.3 Sistema de comentario</h4>
                <p>
                    Como se describe en la sesi&oacute;n <b>2. uso de la p&aacute;gina</b>, se puede escribir todos los comentarios que el usuario decida en cada una de nuestras publicaciones. Los datos que el usuario inserte en la publicaciones son guardados en nuestra base de datos. Estos pueden ser eliminados o editados siempre que el usuario propietario del comentario lo decida. Se recomienda ser respetuoso en cada comentario o de lo contrario su comentario podria ser eliminado y es posible que su cuenta de usuario corra peligro de ser sancionada o eliminada. Para poder crear un comentario es necesario registrarse en la p&aacute;gina web
                </p>

            </article>

            <!-- Google analytics -->
            <article id='analytics'>
                <h3 class="flow-text">7. Google Analytics</h3>
                <p>
                    <b>thecanario.com</b> utiliza Google Analytics que es un servicio web de <b>Google LLC</b>. Google analytics emplea Cookies para poder posibilitar el uso correcto del sitio web. La informaci&oacute;n sobre el uso de <b>thecanario.com</b> es trasmitida normalmente a los servidores de Google en (EE.UU.) y es almacenada all&iacute;.
                </p>

                <p>Empleamos Google Analytics para ver el comportamiento de nuestros usuarios y visitantes en la p&aacute;gina adem&aacute;s de ver otros datos como la ubicacion aproximada y el pa&iacute;s de donde nos visita. Estas y otras informaciones nos ayuda a entender como se comporta el usuario dentro de nuestro sitio web.</p>
            </article>

            <!-- Google fonts -->
            <article id='fonts'>
                <h3 class="flow-text">8. Google Fonts</h3>
                <p>
                    Nuestro sitio web utiliza fuentes de letras de Google Fonts propiedad de <b>Google</b> para visualizar fuente de letras hermosas y contribuir a una mejor experiencia de usuario. Cuando entra a la p&aacute;gina web, su navegador carga las fuentes requeridas en las caches de su navegador para visualizar los textos de manera correctas, su direcci&oacute;n <b>IP</b> se transfiere a los servidores de Google. Si por dado caso su navegador no soporta Google Fonts entonces utilizara otro tipos de fuentes b&aacute;sicas.
                </p>
            </article>

            <!-- insercion -->
            <article id='video'>
                <h3 class="flow-text">9. V&iacute;deos de redes sociales y YouTube insertados</h3>
                <p>
                   En muchas publicaciones de este sitio web puedes encontrar videos de YouTube, Facebook, Instagram entre otros insertados en nuestro sitio web, ademas de publicaciones de redes sociales. Si usted reproduce un video o oprime el enlace de la publicaci&oacute;n usted sera redirigido a sitio web de terceros y su informaci&oacute;n sera recibida y almacenada por otros proveedores.
                </p>
            </article>

            <!-- trasparencia -->
            <article id='datos'>
                <h3 class="flow-text">10. Trasparencia de datos</h3>
                <p>
                   Solo facilitaremos sus datos aqui descritos cuando sea unicamente necesario para el uso correcto de nuestro servicio o en otras circunstancia que este permitida por la ley. Ademas de su obligacion legar de cumplir con todos los reglamentos sobre la ley de protecci&oacute;n de datos estos proveedores de servicios están obligados a cumplir requisitos contractuales adicionales de protección de datos.
                </p>
            </article>

            <!-- Eliminar usuario -->
            <article id='eliminar'>
                <h3 class="flow-text">11. Eliminaci&oacute;n de usuario</h3>
                <p>
                    Tomamos la decicion de eliminar un usuario por dos motivos, cuando este incumple con nuestras normas de uso descritas en la <b>sesi&oacute;n 2</b> uso del sitio web y la segunda cuando este decide eliminar su usuario del sitio web. Para eliminar su usuario del sitio web, este debe estar registrado en la plataforma y debe de ponerse en <a href="<?=$url?>/contact">contact</a> con nosotros y esplicarnos el motivo por el cual ya no desea ser parte de nuestra comunidad adem&aacute;s de solitar la eliminaci&oacute;n de su usuario del sitio web.
                </p>
            </article>

            <!-- Herramientas -->
            <article id='herramientas'>
                <h3 class="flow-text">12. Imagenes utilizadas en las publicaciones</h3>
                <p>
                    Todas nuestras imagenes que utilizamos en nuestras publicaciones son descargadas de bancos de imagenes totalmente gratis y libre uso. Nuestras imagenes son descargadas de sitio web como <a href="https://pixabay.com/es/">https://pixabay.com/es/</a> que es un sitio que de distribuci&oacute;n de imagenes libres de derechos de autor.
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