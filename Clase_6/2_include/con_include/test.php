<?php

    //Incluimos el codigo de operacion.php
    include 'operacion.php';

    /*
    Ahora que incluimos el codigo en operacion.php en nuestro archivo test.php
    podemos llamar a la funcion suma
    */

    $numero1 = 10;
    $numero2 = 15;

    $resultado = suma($numero1, $numero2);
    echo "El resultado de la suma es: $resultado"; 

?>