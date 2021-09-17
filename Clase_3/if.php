<h1>Con IF</h1>

<?php
    $numero1 = 10;
    $numero2 = 5;
    $operacion = "RESTA";

    if ($operacion == "SUMA") {
        echo "La suma es: ".($numero1 + $numero2);
    }
    elseif($operacion == "RESTA"){
        echo "La resta es: ".($numero1 - $numero2);
    }
    elseif($operacion == "DIVISION"){
        echo "La division es: ".($numero1 / $numero2);
    }
    elseif($operacion == "MULTIPLICACION"){
        echo "La multiplicacion es: ".($numero1 * $numero2);
    }
    elseif($operacion == "POTENCIACION"){
        echo "La potenciacion es: ".($numero1 ** $numero2);
    }
?>

<h1>Con Switch</h1>

<?php
    $numero1 = 10;
    $numero2 = 5;
    $operacion = 'resta';

    switch ($operacion) {
        case '+':
            $total = $numero1 + $numero2;
            echo "La suma es: $total";
            break;
        case '-': echo "La resta es: ".($numero1 - $numero2); break;    
        case 'DIVISION': echo "La division es: ".($numero1 / $numero2); break;
        case 'MULTIPLICAICON': echo "La multiplicacion es: ".($numero1 * $numero2); break;
        default: echo "Esta operacion no esta definida, por favor ingrese (SUMA, RESTA, DIVISION O MULTIPLICACION"; break;
    }

?>