<?php
    $nombres_1 = ["Alba", "Bernardo"];

    $nombres_2 = ["Antonio", "Bárbara", "Carlos"];

    #Se muestra la union de los dos pasados en distinto orden
    print "<pre>"; print_r($nombres_1 + $nombres_2); print "</pre>";
    print "<pre>"; print_r($nombres_2 + $nombres_1); print "</pre>";
?>