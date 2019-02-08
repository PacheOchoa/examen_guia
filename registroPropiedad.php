<?php

include 'conexion.php';


$cliente = $_POST['cliente'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$precio = $_POST['precio'];
$foto = $_FILES['foto'];

$nombre_foto = $foto['name'];



$sql = "INSERT INTO propiedad (cliente_id, domicilio, telefono , costo, foto) VALUES (?,?,?,?,?)";
$stmt= $conexion->prepare($sql);
$stmt->execute([$cliente, $domicilio, $telefono, $precio, $nombre_foto]);

if($stmt){
    header( "refresh:3; url=propiedades.php" );
    echo "<script> alert('Propiedad registrada con exito'); </script>";

   
    
}



?>