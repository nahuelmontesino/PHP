<?php
    $alumno[0] = $_POST['num_alum'];
    $alumno[1] = $_POST['nombre'];
    $alumno[2] = $_POST['apellido'];
    $alumno[3]= $_POST['nota'];


    // Abrimos el archivo situando el puntero al final del archivo
    //a: apertura para escritura, si no existe se intenta crear
    $archivo = fopen( "alumnos.csv", "a" );

    //Escribimos los datos en un archivo csv
    fputcsv($archivo, $alumno, ";");

    echo "Se agrego correctamente el alumno";

    fclose($archivo);
?>