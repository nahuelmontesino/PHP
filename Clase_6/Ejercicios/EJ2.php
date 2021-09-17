<?php
    function recorrer_vector($vector){
        $cant_elementos = count($vector);
        for ($i = 0; $i < $cant_elementos; ++$i){
            print "$vector[$i]<br>";
        }
    }
?>