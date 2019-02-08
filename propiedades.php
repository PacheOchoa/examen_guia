<?php 
 include 'conexion.php';
$stmt = $conexion->query("SELECT id,nombre FROM clientes"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
</head>
<body>

    <h2>Registro de Propiedades</h2>
     
    <form action="registroPropiedad.php" method="POST" enctype="multipart/form-data">
    <div class="uk-margin">
    <select class="uk-select uk-form-width-medium" name="cliente" >
        <option value="A">Selecciona un cliente</option>

        <?php  while ($ver = $stmt->fetch()): ?>
        
            <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
        
<?php endwhile; ?>
    </select>
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="domicilio" type="text" placeholder=" domicilio de la propiedad" value=""> </p>
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="telefono" type="tel" placeholder="telefono de contacto" value=""> </p>
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="precio" type="text" placeholder="Costo de la propiedad" value=""> </p>
    
    
            <input type="file" name="foto">
            
      
   <p><input type="submit" class="uk-button uk-button-primary" value="Registrar Propiedad" name="enviar"> </p>
    <a href="index.php" class="uk-button uk-button-secondary" >Registrar Cliente</a>
 

</div>
</form>
</body>
</html>