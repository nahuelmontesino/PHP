<?php
    $nombre = 'John';
    $apellido = 'Doe';
    $fechaNacimiento = '1980-12-01';

    function nombreCompleto($nombre, $apellido)
    {
        return "{$nombre} {$apellido}";
    }
    
    function Edad($fechaNacimiento)
    {
        // Calculo de la fecha de nacimiento
        return "obtenerAños(fechaActual - $fechaNacimiento)";
    }

?>