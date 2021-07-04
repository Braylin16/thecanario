<?php

// Sacar todos los datos de la persona que ha iniciado sesion
$stmt = $conexion->query("SELECT * FROM users WHERE email = '$email'");
$stmt->execute(['email' => $email]);
while ($row = $stmt->fetch()) {
    $id_user = $row['id_user'];
    $name = $row['name'];
    $surname = $row['surname'];
    $email = $row['email'];
    $photo = $row['photo_profile'];
    $roll = $row['roll'];
    $create_at = $row['create_at_user'];

    $id_user = (int)$id_user;
}