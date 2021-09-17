<?php

    function obtener_datos($url_archivo, $pocicion){

        $archivo = fopen($url_archivo, "r" );

        // Recorremos el archivo completo:
        while( feof($archivo) == false )
        {
            //Obtenemos una linea o registro del csv
            $datos = fgetcsv($archivo,null , ";");

            //Verificamos que $datos no sea null cuando llega 
            if($datos){
                //Mostramos los datos de la linea o registro en el navegador

                $columna_datos [] = $datos[$pocicion];
            }
        }

        fclose( $archivo );

        return $columna_datos;

    }
    
?>