<?php

// Si no esta logueado | Redirecionarlo
function logueado(){
    if(!isset($_SESSION['email'])){
        header('Location: http://localhost/thecanario/');
    }
}