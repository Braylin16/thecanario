<?php session_start();

// Requeriemintos
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');
require_once('backend/suscribe.php');

// Si no ha iniciado sesion, se sacdar datos del usuario
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    require_once('user/user.php');
}

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

// Sacar los id
$sql = $conexion->query("SELECT id_post, title FROM post WHERE id_post = $id_post");
$sql->execute();
while ($row = $sql->fetch()) {
    $all_id_post = $row['id_post'];
    $title = $row['title'];

}

// Pasar la variable titulo por la URL
$titleURL = str_replace(' ', '-', $title);
$titleURL = strtolower($titleURL);

// Verificar que llegue el titulo por la URL
if(isset($_GET['title'])){
    $titleGET = $_GET['title'];
}else{
    header("Location: article/$id_post/$titleURL");
}

// Si introducen un id que no existe, lo lleva a la pagina de inicio
if($id_post > $all_id_post || $id_post == 0) {
    header("Location: $url");
}

// Seleccionar los datos del articulo en base id que nos llega por get
require_once('selects/article/article.php');
// Selecionar las publicaciones de "Mas publicaciones"
require_once('selects/article/morepub.php');
// Insertar los comentarios
require_once('backend/comments.php');
// Selecionar todos los comentarios
require_once('selects/comments/comments.php');
// Cantidad de comentarios en cada post
require_once('count/comment/count-comment.php');
// Contador de visitas
require_once('view/view.php');
?>
<?php foreach($result as $post) : ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title'] ?> | The Canario</title>
    <base href="<?=$url?>">
    <meta name="description" content="<?php echo $post['description_post'] ?>">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="js/goto.js"></script>
</head>
<?php endforeach ?>
<body class="grey lighten-4">
    <?php require_once('frontend/header.php') ?>

    <main class="row section col s12">
        <!-- Boton ir arriba -->
        <span role="button" class="ir-arriba green">
            <i class="material-icons white-text">keyboard_arrow_up</i>
        </span>
        <!-- Menu -->
        <?php require_once('menu/menu.php') ?>
        <!-- Contenido del articulo -->
        <?php require_once('pub/main.php') ?>
        <!-- Mas publicaciones -->
        <?php require_once('pub/morepub.php') ?>
        <!-- suscribirse a nuestro correo -->
        <?php require_once('pub/suscribe.php') ?>
        <!-- Comentarios -->
        <?php require_once('pub/comments.php') ?>

    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
</body>

<!-- Scripts -->
<script src="./materialize/js/materialize.min.js"></script>
</html>