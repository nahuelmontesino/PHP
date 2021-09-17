<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar operacion</title>
</head>
<body>
    <h1>Operacion operacion</h1>
    <h4>Ingrese los numeros </h4>
    <form action="aplicacion.php" method="POST">
        Numero 1 <input type="text" name="num_1">
        Numero 2 <input type="text" name="num_2">
        <select name="operador">
            <option>Suma</option>
            <option>Resta</option>
        </select>
        <button type="submit" name="btn1" value="Enviar">Realizar Operacion</button>
    </form>
</body>
</html>

<?php
    //Incluimos el codigo para que se ejecute en la misma pagina
    include "realizar_operacion.php"

?>