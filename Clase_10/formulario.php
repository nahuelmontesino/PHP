<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nombre <input type="text" name="nombre">
        Apellido <input type="text" name="apellido">
        <button type="submit" name="btn1">Enviar</button>
    </form>

    <?php
        if(isset($_POST['btn1'])){
            var_dump($_POST['nombre']);
            var_dump($_POST['apellido']);
        }
    ?>
</body>
</html>





