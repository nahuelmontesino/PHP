<?php
    $archivo = fopen( "usuarios.csv", "r" );

    // Recorremos el archivo completo:
    while( feof($archivo) == false )
    {
        //Obtenemos una linea o registro del csv
        $datos = fgetcsv($archivo,null , ";");

        //Verificamos que $datos no sea null cuando llega 
        if($datos){
            //Mostramos los datos de la linea o registro en el navegador
            echo "Nombre: ".$datos[0]."<br />";
            echo "Apellido: ".$datos[1]."<br />";
            echo "Edad: ".$datos[2]."<br />";
            echo "Telefono: ".$datos[3]."<br />";
            echo "--------------------------<br />";
        }
    }

    fclose( $archivo );
?>