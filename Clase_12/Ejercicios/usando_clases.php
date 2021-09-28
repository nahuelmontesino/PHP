<?php
    require "clases.php";
    $auto_1 = new Auto("rojo", 2000);
    //cambiamos el color del auto
    $auto_1->repintar("verde");
    $auto_1->añadirPersona(60);
    $auto_1->añadirPersona(70);
    echo "El peso del vehiculo 1 es: ". $auto_1->getPeso()."kg";
    echo "<br>";
    echo "El color del vehiculo 1 es: ". $auto_1->getColor();
    echo "<br>";

    $auto_2 = new Auto("negro", 1900);
    //cambiamos el color del auto
    $auto_2->añadirPersona(110);
    $auto_2->añadirPersona(90);
    echo "El peso del vehiculo 2 es: ". $auto_2->getPeso()."kg";
    echo "<br>";
    echo "El color del vehiculo 1 es: ". $auto_2->getColor();

?>