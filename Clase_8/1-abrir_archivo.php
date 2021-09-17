<?php
    #path al archivo
    $file = "miarchivo.tx";
     
    if ($fp = fopen($file, "r")){
        echo "El archivo se abrio correctamente";
    }
     else{
        echo "Ha ocurrido un error al abrir el archivo";
    }
    
?>