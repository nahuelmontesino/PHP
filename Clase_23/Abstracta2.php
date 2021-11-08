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

        // Metodo que debe ser implementado por las clases que la extiendan
        // ya que cada clase tendra una implementacion distinta para esto.
        abstract public function hacerRuido();
    }

    // La clase Perro extiende de Animal por lo tanto debe implementar el metodo abstacto
    // definido en la clase Animal  
    class Perro extends Animal
    {
        
        public function hacerRuido()
        {
            return "Guau";
        }
    }

    // La clase Gato extiende de Animal por lo tanto debe implementar el metodo abstacto
    // definido en la clase Animal  
    class Gato extends Animal
    {
        public function hacerRuido()
        {
            return "Miau";
        }
    }

    $perro = new Gato("w","s");
    echo $perro->hacerRuido();

?>