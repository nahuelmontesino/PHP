<?php
    $nombres = ["Pedro", "Ismael", "Sonia", "Clara", "Susana"];
    echo "La cantidad de nombres es: ".count($nombres)."<br>";
    sort($nombres);
    echo "<p>El primer elemento del vector es $nombres[0] <br>",
    "el segundo elemento del vector es $nombres[1]<p>";
?>