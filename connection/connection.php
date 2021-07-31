<?php
// Conexion a la base de datos
try{
  $conexion = new PDO('mysql:host=localhost;dbname=thecanario', 'root', '');
}catch(PDOException $e){
  header('Location: http://localhost/thecanario/jobs');
}