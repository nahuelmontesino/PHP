<?php
    if(isset($_POST["nombre"]) && $_POST["nombre"] !== ""){
        echo "OK";
    }
?>

<?php
    if(!empty($_POST["nombre"])){
    echo "OK";
    }
?>