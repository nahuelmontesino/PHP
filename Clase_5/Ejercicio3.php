<?php
    $ciudades = [ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    echo "La cantidad de ciudades es: ".count($ciudades)."<br>";
    echo "Las ciudades son: <br>";
    for($i = 0; $i < count($ciudades); $i++){
        echo $ciudades[$i]."<br>";
    }
?>