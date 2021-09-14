<?php
// Conexion a la base de datos
try{
  $conexion = new PDO('mysql:host=localhost;dbname=thecanar_blog', 'thecanar_root', '%R7kixBKq?r.');
}catch(PDOException $e){
  header('Location: https://thecanario.com/jobs');
}