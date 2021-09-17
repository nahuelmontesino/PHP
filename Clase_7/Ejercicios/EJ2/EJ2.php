<?php
    $nombres= ["Ramon", "Marcelo", "Nicolas", "Juan", "Martin"];
    $edades= array(16, 18, 12, 50, 29);

    $mas_grande = array_search(max($edades), $edades);

    echo $nombres[$mas_grande];

    // $claves = array_keys($edades, max($edades));
    // print("Con array_keys");
    // print_r($claves);

?>