<?php

// Si no esta logueado | Redirecionarlo
function logueado(){
    if(!isset($_SESSION['email'])){
        header('Location: https://thecanario.com/');
    }
}

// Si ha iniciado sesion | Redirecionarlo, funcion para login, register
function initSesion(){
    if(isset($_SESSION['email'])){
        header('Location: https://thecanario.com/');
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
    $titleURL = str_replace('?', '', $titleURL);
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
    //$min = date_default_timezone_set('America/Santo_Domingo');
    $min = date('i', $times);
    $meridiano = date('A', $times);

    $fecha = "$dia de " . $meses[$mes] . " del $anio a las $hour:$min $meridiano";
    return $fecha;

}

// Detectar el nombre del navegador
function getBrowserName($browser)
{
    if (strpos($browser, 'Opera') || strpos($browser, 'OPR/')) return 'Opera Mini';
    elseif (strpos($browser, 'Edge')) return 'Microsoft Edge';
    elseif (strpos($browser, 'Chrome')) return 'Google Chrome';
    elseif (strpos($browser, 'Safari')) return 'Safari';
    elseif (strpos($browser, 'Firefox')) return 'Mozilla Firefox';
    elseif (strpos($browser, 'MSIE') || strpos($browser, 'Trident/7')) return 'Internet Explorer';
   
    return 'Desconocido';
}

// Detectar URL en el texto
function url($text){
    $text = html_entity_decode($text);
    $text = "".$text;
    $text = preg_replace('/(https{0,1}:\/\/[\w\-\.\:\/#?&=]*)/','<a href="$1" target="_blank">$1</a>',$text);
    return $text;
}

// Abreviatura de la cantidad de visitas
function abreView($visitas){

    if($visitas >= 1000 AND $visitas  <= 2000){
        $visitas = '1K';
    }elseif($visitas >= 2000 AND $visitas  <= 3000){
        $visitas = '2K';
    }elseif($visitas >= 3000 AND $visitas  <= 4000){
        $visitas = '3K';
    }elseif($visitas >= 4000 AND $visitas  <= 5000){
        $visitas = '4K';
    }elseif($visitas >= 5000 AND $visitas  <= 6000){
        $visitas = '5K';
    }elseif($visitas >= 6000 AND $visitas  <= 7000){
        $visitas = '6K';
    }elseif($visitas >= 7000 AND $visitas  <= 8000){
        $visitas = '7K';
    }elseif($visitas >= 8000 AND $visitas  <= 9000){
        $visitas = '8K';
    }elseif($visitas >= 9000 AND $visitas  <= 10000){
        $visitas = '9K';
    }elseif($visitas >= 10000 AND $visitas  <= 11000){
        $visitas = '10K';
    }elseif($visitas >= 11000 AND $visitas  <= 12000){
        $visitas = '11K';
    }elseif($visitas >= 12000 AND $visitas  <= 13000){
        $visitas = '12K';
    }elseif($visitas >= 13000 AND $visitas  <= 14000){
        $visitas = '13K';
    }elseif($visitas >= 14000 AND $visitas  <= 15000){
        $visitas = '14K';
    }elseif($visitas >= 15000 AND $visitas  <= 16000){
        $visitas = '15K';
    }elseif($visitas >= 16000 AND $visitas  <= 17000){
        $visitas = '16K';
    }elseif($visitas >= 17000 AND $visitas  <= 18000){
        $visitas = '17K';
    }elseif($visitas >= 18000 AND $visitas  <= 19000){
        $visitas = '18K';
    }elseif($visitas >= 19000 AND $visitas  <= 20000){
        $visitas = '19K';
    }elseif($visitas >= 20000 AND $visitas  <= 21000){
        $visitas = '20K';
    }

    return $visitas;
}