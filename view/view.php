<?php

// Obtener la ip del visitante
$ip_view = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

// $browser = getBrowserName($browser);

// Selecionamos la cantidad de visitas que tiene el post
$selectViews = $conexion->query("SELECT view FROM view WHERE id_view_post = $id_post");
$selectViews->execute();
while ($countViews = $selectViews->fetch()) {

    $visitas = $countViews['view'];

}

// Si no existe el registro, entonces creamos uno para luego actualizar las visitas
if(empty($visitas) AND $ip_view != $ip_visitor){
    $insertView = $conexion->prepare('INSERT INTO view (id_view, id_view_post, view, browser_view, ip_view, create_at_view) VALUES(
        null, :id_post, 1, :ip_view, :browser, NOW())'
    );
    $insertView->execute(array(
        ':id_post' => $id_post,
        ':ip_view' => $ip_view,
        ':browser' => $browser
    ));
}

// La visita del usuario
if(!empty($visitas)){
    $view = $visitas + 1;
    $postInt = (int)$id_post;
}

// actualizar, registrar la visita del producto
if(isset($view)){
    $statement = $conexion->prepare("UPDATE view SET view = '$view' WHERE id_view_post = $postInt"
    );
    $statement->execute(array(
        ':view' => $view,
        ':postInt' => $postInt
    ));
}