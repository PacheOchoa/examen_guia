<?php

 include 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];


$sql = "INSERT INTO clientes (nombre, apellido, telefono, direccion) VALUES (?,?,?,?)";
$stmt= $conexion->prepare($sql);
$stmt->execute([$nombre, $apellido, $telefono, $direccion]);

if($stmt){
    header( "refresh:3; url=index.php" );
    echo "<script> alert('cliente registrado con exito'); </script>";

   
    
}


?>