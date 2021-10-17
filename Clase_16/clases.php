<?php
    class Usuario{
        private $dni;
        public $nombre;
        public $direccion;
        public $telefono;
        
        function __construct($dni, $nombre, $direccion, $telefono)
        {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
        }

        public function getDni(){
            return $this->dni;
        }
    }

?>