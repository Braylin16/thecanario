<?php

// Si no esta logueado | Redirecionarlo
function logueado(){
    if(!isset($_SESSION['email'])){
        header('Location: http://localhost/thecanario/');
    }
}

// Si ha iniciado sesion | Redirecionarlo, funcion para login, register
function initSesion(){
    if(isset($_SESSION['email'])){
        header('Location: http://localhost/thecanario/');
    }
}

// Si el usuario no es de tipo Admin, lo saca de la pagina
function noAdmin($admin, $link){
    if($admin != 'Admin'){
        header("Location: $link");
    }
}

// Limpiar url
function clearUrl($title){
    // Pasar la variable titulo por la URL
    $titleURL = str_replace(' ', '-', $title);
    $titleURL = strtolower($titleURL); 
    $titleURL = filter_var($titleURL, FILTER_SANITIZE_URL);
    return $titleURL; 
}

// Formatear fecha | Solo fecha
function form_fecha($fecha){
    $times = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo',
            'Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $times);
    $mes = date('m', $times) - 1;
    $anio = date('Y', $times);

    $fecha = "$dia de " . $meses[$mes] . " del $anio";
    return $fecha;

}

// Formatear fecha y hora
function fechaHora($fecha){
    $times = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo',
            'Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $times);
    $mes = date('m', $times) - 1;
    $anio = date('Y', $times);
    $hour = date('h', $times);
    $min = date('i', $times);
    $meridiano = date('A', $times);

    $fecha = "$dia de " . $meses[$mes] . " del $anio a las $hour:$min $meridiano";
    return $fecha;

}