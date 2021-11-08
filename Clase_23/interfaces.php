<?php

    // Interface donde definimos los metodos minimos que queremos que
    // implementen todos los vehiculos que definamos
    interface Vehiculo {
        public function getTipo();
        public function getRuedas();
    }

    class Auto implements Vehiculo{
        public function getTipo(){
            echo "Auto";
        }
        public function getRuedas(){
            echo "4";
        }
    }

    class Moto implements Vehiculo {
        public function getTipo(){
            echo "Moto";
        }
        public function getRuedas(){
            echo "2";
        }
    }

    //Podriamos implementar una camioneta y tambien deberia 
    // implementar esos metodos porque es un vehiculo

?>