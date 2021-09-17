<?php
    $notas = [5, 8, 9, 10, 2, 3, 6, 7];

    function operaciones_con_vector($notas){
        $nota_max = max($notas);
        $nota_min = min($notas);
        $suma = array_sum($notas);
        $cant_notas = count($notas);
        $promedio = $suma / $cant_notas;
        print "La nota maxima es: $nota_max";
        print "<br>";
        print "La nota minima es: $nota_min";
        print "<br>";
        print "El promedio es: $promedio";
        print "<br>";
        print "La cantidad de notas es: $cant_notas";
    }
    
    operaciones_con_vector($notas);
?>