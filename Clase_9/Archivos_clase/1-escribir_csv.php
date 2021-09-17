<?php
    //Los campos son Nombre, Apellido, Edad y Telefono
    $datos = array("Rosa", "Castellano", 30, 11221212);

    // Abrimos el archivo situando el puntero al final del archivo
    //a+: apertura para lectura y escritura, si no existe se intenta crear
    $archivo = fopen( "datos.csv", "a+" );

    //Escribimos los datos en un archivo csv
    fputcsv($archivo, $datos);

    fclose($archivo);
?>



