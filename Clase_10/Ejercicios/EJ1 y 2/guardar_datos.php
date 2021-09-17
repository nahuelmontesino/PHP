<?php

    if(isset($_POST['btn1'])){
        if(empty($_POST['dni']) || empty($_POST['nombre']) || empty($_POST['apellido']) )
        {
            echo "Deben ingresarse los campos obligatorios: Dni, Nombre y apellido";
        }
        else
        {
            $usuario['dni'] = $_POST['dni'];
            $usuario['nombre'] = $_POST['nombre'];
            $usuario['apellido'] = $_POST['apellido'];
            $usuario['telefono']= $_POST['telefono'];

            // Abrimos el archivo situando el puntero al final del archivo
            //a: apertura para escritura, si no existe se intenta crear
            $archivo = fopen( "clientes.csv", "a" );

            //Escribimos los datos en un archivo csv
            fputcsv($archivo, $usuario, ";");

            echo "Se agrego correctamente el usuario";

            fclose($archivo);

        }

        
    }
   

?>