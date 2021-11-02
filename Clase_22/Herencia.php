<?php 
    class Persona
    {
        private $nombre;
        private $edad;
        public $telefono;

        public function __construct($nombre, $edad, $telefono)
        {   
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->telefono = $telefono;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getNombre(){
            return $this->nombre;
        }
    }

    /*Como la clase estudiante extiende la clase persona esto significa
        que la clase Estudiante es a clase hija o subclase y que la clase persona
        es una clase padre o superclase. La clase hija Estudiante hereda todos los
        miebros publicos y protejidos (atributos y metodo) de la clase padre */

    /*Por lo tanto en la clase estudiante tendremos las siguientes propiedades y metodos*/
        //public $telefono;

        //public function __construct($nombre, $edad, $telefono)
        //public function getNombre(){}
        //public function getEdad(){}

        //pero no hereda los metodos o atributos privados

    class Estudiante extends Persona
    {
        private $carrera;

        public function setCarrera($carrera) {
            $this->carrera = $carrera;
        }
    
        public function  getCarrera() {
            return $this->carrera;
        }
    }

    //Usamos el contructor heredado de la clase Persona, para crear un Estudiante
    $estudiante = new Estudiante("Fernando", 23, 3442505050);

    //Usamos el metodo heredado para obtener el nombre
    echo $estudiante->getNombre();  //Devuelve Fernando

    //Usamos el metodo que agregamos en la clase Estudiante para asiganarle una carrera
    $estudiante->setCarrera("programacion");
?>