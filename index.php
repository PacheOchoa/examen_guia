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
    <h2>Registro de Clientes</h2>
     
    <form action="registroCliente.php" method="POST">
    <div class="uk-margin">
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="nombre" type="text" placeholder="Nombre" value=""> </p> 
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="apellido" type="text" placeholder="Apellido" value=""> </p>
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="telefono" type="tel" placeholder="telefono" value=""> </p>
    <p><input class="uk-input uk-form-success uk-form-width-medium" name="direccion" type="text" placeholder="direccion" value=""> </p>

   <p><input type="submit" class="uk-button uk-button-primary" value="Registrar Cliente" name="enviar"> </p>
    <a href="propiedades.php" class="uk-button uk-button-secondary" >Registrar propiedad</a>
 

</div>
</form>
</body>
</html>