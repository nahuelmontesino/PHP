<form action="formulario.php" method="post">
    Nombre <input type="text" name="nombre">
    <button type="submit">Enviar nombre</button>
</form>


<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    echo "Hola $nombre";
}
else{
    echo "No hay nombre";
}
 
?>