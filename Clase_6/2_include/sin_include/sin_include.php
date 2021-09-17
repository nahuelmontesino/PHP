<?php

    function suma($numero1, $numero2)
    {
        $resultado = $numero1 + $numero2;
        return $resultado;
    }

    $numero1 = 10;
    $numero2 = 15;

    $resultado = suma($numero1, $numero2);
    echo "El resultado de la suma es: $resultado"; 

?>