<?php
    include "operaciones.php";
    //Determina si una variable está definida y no es null
    //En este caso verifica que se halla presionado el boton
    if(isset($_POST['btn1'])){
        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $resultado = suma($num_1, $num_2);
        print "<p>El resultado de la suma es: $resultado</p>";
    }

?>