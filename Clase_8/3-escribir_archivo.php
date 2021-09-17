<?php
    $file = "miarchivo.txt";
    $texto = "Hola que tal";
    //Abrimos el archivo en modo escritura
    $fp = fopen($file, "w");
    //Usamos fwrite y le pasamos el puntero al archivo y el texto
    fwrite($fp, $texto); //escribirá solo: Hola
    fclose($fp);
?>