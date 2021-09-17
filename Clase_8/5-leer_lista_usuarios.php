<?php

    // Abrir el archivo en modo lectura:
    $archivo = fopen("usuarios.txt","r");

    // Recorremos el archivo mostando el contenido de cada línea
    # feof: Esta función comprueba si el puntero se encuentra al final del archivo
    while( feof($archivo) == false )
    {
       //fgets() y que nos devolverá una cadena de texto con el contenido 
       //de la línea en la que se encuentra el puntero al archivo. 
       echo fgets($archivo). "<br />";
    }

    // Cerramos el archivo
    fclose($archivo);
?>