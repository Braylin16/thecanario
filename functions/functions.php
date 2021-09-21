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
function abreView( $n, $precision = 1 ) {
    if ($n < 900) {
        // 0 - 900
        $n_format = number_format($n, $precision);
        $suffix = '';
    } else if ($n < 900000) {
        // 0.9k-850k
        $n_format = number_format($n / 1000, $precision);
        $suffix = 'K';
    } else if ($n < 900000000) {
        // 0.9m-850m
        $n_format = number_format($n / 1000000, $precision);
        $suffix = 'M';
    }
  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
    if ( $precision > 0 ) {
        $dotzero = '.' . str_repeat( '0', $precision );
        $n_format = str_replace( $dotzero, '', $n_format );
    }
    return $n_format . $suffix;
} // Este codigo es de StackOverflow