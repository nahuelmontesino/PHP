<?php
    //Obtenemos la pocicion en el vector del valor  buscado
    $arreglo1= array ('Pedro','Juan','Ignacio','Marcelo','Tomas');
    //Buscamos el nombre Ignacio en el vector		
    $pos = array_search('Ignacio', $arreglo1);
    //Verificamos que halla encontrado el nombre
    if($pos){
        echo "La pocicion en la que se encuentra es: $pos";
        // #Para mostrar el valor
        // echo "<br>";
        // echo "El valor en esa pocicion es: $arreglo1[$pos]";
    }
    else{
        echo "El valor buscado no se encuentra en el array";
    }


?>