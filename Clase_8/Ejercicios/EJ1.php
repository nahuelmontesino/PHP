<?php
    $descripcion = "Nos dedicamos a la venta de los mejores autos";

    $archivo = fopen("descripcion.txt", "w");

    fwrite($archivo, $descripcion);

    fclose($archivo);

?>

<h1>Descripcion</h1>

<?php
    $nombre = "descripcion.txt";

    //Abrimos el archivo en modo lectura
    $archivo = fopen($nombre, "r");

    $tamaño_archivo = filesize($nombre);

    //Leemos el archivo desde el principio al final
    $datos = fread($archivo, $tamaño_archivo);

    echo $datos;

?>