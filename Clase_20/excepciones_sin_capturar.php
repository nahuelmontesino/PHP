<?php

    //Creamos una funcion que lanza una excepcion
    function checkNum($number) {
        if($number>1) {
            throw new Exception("El valor debe ser menor o igual 1");
        }
    }

    //Hacemos que se produzca un error
    checkNum(2);
?>