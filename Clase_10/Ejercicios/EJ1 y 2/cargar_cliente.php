<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Ingrese los datos del cliente</h2> 
    <form action="" method="POST">
        DNI<input type="text" name="dni" required>
        Nombre<input type="text" name="nombre" required>
        Apellido<input type="text" name="apellido" required>
        Telefono<input type="text" name="telefono">

        <button type="submit" name="btn1">Registrar</button>
    </form>


    <?php
        require "guardar_datos.php";
    ?>
    
</body>
</html>