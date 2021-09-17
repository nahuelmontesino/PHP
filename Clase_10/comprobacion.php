<?php
    $var1 = null;
    isset($var1); # false, porque está en null
    isset($var2); # false, ni siquiera la hemos declarado

    $arreglo = [
    "nombre" => "María",
    ];

    isset($arreglo); # true, claro que está definido
    isset($arreglo["nombre"]); # true, pues sí existe el nombre
    isset($arreglo["edad"]); #false, arreglo existe pero la clave edad no
?>