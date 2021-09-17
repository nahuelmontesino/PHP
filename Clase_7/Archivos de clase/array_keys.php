<?php
    //Otenemos las claves el vector entero
    
    $nombres = ["Pedro", "Juan", "Jose"];
    $claves = array_keys($nombres);
    print("<h2>Claves de todo el vector</h2>");
    print_r($claves);

    //Obtenemos las claves de los elementos que coincidan con el valor pasado
    //en el segundo parametro
    $nombres2 = ["Pedro", "Juan", "Jose","Pedro"];
    $claves = array_keys($nombres2,"Pedro");
    print("<h2>Otenemos las claves de Pedro</h2>");
    print_r($claves);
?>
