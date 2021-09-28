<?php
    class Auto{
        private $color;
        private $peso;

        public function __construct($color, $peso)
        {
            $this->color = $color; //Inicializa el color
            $this->peso = $peso;   //Inicializa el peso
        }

        public function getColor(){
           return $this->color;
        }
        public function getPeso(){
            return $this->peso;
        }

        public function añadirPersona($pesoPersona){
            $this->peso += $pesoPersona;
        }

        public function repintar($color){
            $this->color = $color;
        }
    }

    $auto = new Auto("rojo", 1000);
    $auto->repintar("verde")
?>