<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de notas</title>
</head>
<body>
    <h1>Login</h1>
    <h2>Ingrese los datos del alumno</h2> 
    <form action="registro.php" method="POST">
        Numero de alumno <input type="text" name="num_alum">
        Nombre<input type="text" name="nombre" required>
        Apellido<input type="text" name="apellido" required>
        Nota<input type="text" name="nota">
        <button type="submit">Agregar nota</button>
    </form>
    
</body>
</html>