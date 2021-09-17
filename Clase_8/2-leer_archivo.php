<?php
    $file = "miarchivo.txt";
    $fp = fopen($file, "r");
    //filesize = obtiene la longitud del archivo
    $tamaño_archivo = filesize(($file));
    //variable donde se almacena el contenido del archivo
    $contents = fread($fp, $tamaño_archivo);

    echo $contents;
?>