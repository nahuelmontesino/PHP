<?php
    //Creamos una funcion que lanza una excepcion
    function checkNum($number) {
        if($number>1) {
            throw new Exception("El valor debe ser menor o igual 1");
        }
    }

    //Lanzamos una excepcion en un bloque "try"
    try {
        checkNum(2);
        //Si una excepcion es lanzada el siguiente codigo no se ejecuta, 
        //sino que pasa directo al bloque "catch"
        echo 'Si ves esto el número es menor o igual a 1';

    }

    //Aqui capturamos la excepcion lanzada anteriormente
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
?>