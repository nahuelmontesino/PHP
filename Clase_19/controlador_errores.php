<?php
    //Funcion personalizada para manejar errores
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Finalizando el script";
        die();
    }

    //Seteamos el manejador de errores, que solo capturara o manejara tipos de error E_USER_ERROR
    set_error_handler("customError", E_USER_ERROR);

    //Lanzamos un error de el tipo E_USER_ERROR
    $test=2;
    if ($test>=1) {
        trigger_error("El valor ingresado debe ser mayor a uno", E_USER_ERROR);
    }

    echo "Esto no se ejecutara, ya que se detiene la ejecucion cuando hay un error"
?>
