<?php

// Obtener la ip del visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

// $browser = getBrowserName($browser);

$errors = '';

if(isset($_GET['search'])){

    $search = $_GET['search'];

    // Verificar que los datos no esten llegando vacio
    if(empty($search)){
        header("Location: $url");
    }

    // Limpiar los datos de ingeciones
    $search = htmlspecialchars($search);
    $search = trim($search);
    $search = filter_var($search, FILTER_SANITIZE_STRING);

    // Restringir cantidad de carateres
    $searchLen = strlen($search);
    if($searchLen >= 245){
        $errors = "El limite de careteres es de 245 y has colocado $searchLen <br/><br/>";
    }

    // Si la busqueda es menor o igual a 245, me va a guardar la busqueda en la base de datos
    if($searchLen <= 245){
        $statement = $conexion->prepare('INSERT INTO search (id_search, search, browser_search, ip_search, create_at_search) VALUES(
            null, :search, :ip, :browser, NOW())'
        );
        $statement->execute(array(
            ':search' => $search,
            ':ip' => $ip,
            ':browser' => $browser
        ));
    }

}

 // sacar todo lo que coicida con la busqueda
 $stetament = $conexion->prepare(
    "SELECT post.id_post, post.miniatura, post.title, post.category, view.view FROM post INNER JOIN view ON post.id_post = view.id_view_post WHERE title LIKE :search OR entrada LIKE :search OR description_post LIKE :search OR miniatura LIKE :search OR category LIKE :search OR tags LIKE :search LIMIT 10"
);
$stetament->execute(array(':search' => "%$search%"));
$result = $stetament->fetchAll();

if(empty($result)){
    $errors .= "No se ha encontrado resultado para: <b>$search</b>";
}