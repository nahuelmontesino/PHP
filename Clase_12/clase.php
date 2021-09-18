<?php
    class Persona
    {   
        public $nombre;
        public $apellido;
        private $fechaNacimiento;

        public function __construct($nombre, $apellido, $fecha)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fecha;
        }

        public function nombreCompleto()
        {
            return "{$this->nombre} {$this->apellido}";
        }

        public function edad()
        {
            // Calcular edad usando $this->fechaNacimiento...
            return $resultado = "obtenerCantidadAños()";
        }

        public function getFechaNacimiento()
        {
            return $this->fechaNacimiento;
        }
    }

    $persona1 = new Persona("John", "Doe", "1980-12-01");
    
?>