<?php

    //Verificar si existe archivo
    if( file_exists("datos.txt") == true ){
        echo "<p>El archivo existe</p>";
    }   
    else
    {
        echo "<p>El archivo no se ha encontrado</p>";
    }

    //Verificar si existe carpeta
    if( file_exists("miCarpeta") == true ){
        echo "<p>El directorio existe</p>";
    }
    else{
        echo "<p>El directorio no existe</p>";
    }

?>