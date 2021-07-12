<?php

// Si no esta logueado | Redirecionarlo
function logueado(){
    if(!isset($_SESSION['email'])){
        header('Location: http://localhost/thecanario/');
    }
}

// Si el usuario no es de tipo Admin, lo saca de la pagina
function noAdmin($admin, $link){
    if($admin != 'Admin'){
        header("Location: $link");
    }
}

// Formatear fecha
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