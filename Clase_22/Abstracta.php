<?php
    abstract class Animal
    {
        //Atributos
        private $color;
        public $peso;

        public function __construct($color, $peso)
        {   
            $this->color = $color;
            $this->peso = $peso;
        }

        //La implementacion de este metodo es heredada por las clases hijas
        public function getColor()
        {
            return $this->color;
        }
    }

    // La clase Perro extiende de Animal 
    class Perro extends Animal
    {
        private $raza;

        public function setRaza($raza)
        {
            $this->raza = $raza;
        }

        public function getRaza()
        {
            return $this->raza ;
        }

        public function ladrar(){
            echo "Guau Guau Guau<br>";
        }
    }

    // La clase Ave extiende de Animal 
    class Ave extends Animal
    {
        private $tipo; 

        public function setTipo ($tipo) { 
            $this->tipo = $tipo; 
        } 

        public function getTipo () { 
            return $this->tipo;
        }

        public function volar () { 
            echo "Vuelo<br>"; 
        } 
    }

    //Usamos el contructor heredado para crear un perro
    $perro = new Perro("marron", 30);

    //Usamos el metodo nuevo de la clase perro para guardar la raza
    $perro->setRaza("pitbull");

    //Usamos el metodo nuevo de la clase perro
    echo $perro->ladrar();

    //Usamos el atributo publico heredado
    echo $perro->peso;
?>