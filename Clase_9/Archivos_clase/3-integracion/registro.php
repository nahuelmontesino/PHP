<?php

    $usuario['nombre'] = $_POST['nombre'];
    $usuario['apellido'] = $_POST['apellido'];
    $usuario['telefono']= $_POST['telefono'];
    $usuario['direccion'] = $_POST['direccion'];

    // Abrimos el archivo situando el puntero al final del archivo
    //a: apertura para escritura, si no existe se intenta crear
    $archivo = fopen( "usuarios.csv", "a" );

    //Escribimos los datos en un archivo csv
    fputcsv($archivo, $usuario, ";");

    echo "Se agrego correctamente el usuario";

    fclose($archivo);
        

?>