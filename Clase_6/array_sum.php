<?php
    $valores = [2, 4, 6, 8];
    $suma_val = array_sum($valores);
    echo "La suma de los valores es = " . $suma_val . "<br>";

    $valores_con_decimal = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
    $suma_val_decimales = array_sum($valores_con_decimal);
    echo "La suma de los valores con decimal es: " . $suma_val_decimales;
?>


