
<h2>Ingrese los datos del cliente</h2> 
<form action="" method="POST">
    Nombre<input type="text" name="nombre" required>
    Apellido<input type="text" name="apellido" required>
    Telefono<input type="text" name="telefono">
    Direccion<input type="text" name="direccion">
    <button type="submit" name="btn1">Registrar</button>
</form>


<?php
    require "datos/guardar_datos.php";
?>


