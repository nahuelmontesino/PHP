<?php
    include "operaciones.php";

    if(isset($_POST['btn1'])){
        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $operador = $_POST['operador'];
        //Pasamos a mayuscula
        $operador_may = strtoupper($operador);

        switch ($operador_may) {
            case 'SUMA':
                $resultado = suma($num_1, $num_2);
                break;
            case 'RESTA':
                $resultado = resta($num_1, $num_2);
                break;         
            default:
                print "La operacion no se encuentra disponible";
                break;
        }

        print "<p>El resultado de la $operador es: $resultado</p>";

    }

?>