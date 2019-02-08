<?php


$host = 'mysql:dbname=grupo_guia;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $conexion = new PDO($host, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}


