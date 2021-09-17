<?php

   include "manejo_de_datos.php";

   #Se le pasa la pocicion donde se encuentran las notas
   $notas = obtener_datos("alumnos.csv", 3);

   $apellidos = obtener_datos("alumnos.csv", 2);

   echo "El promedio es: ".(array_sum($notas)/ count($notas));

   $pociciones_mas_alta = array_keys($notas, max($notas));

   echo "<h3>Los alumnos con la nota mas alta son: </h3>";

   for ($i=0; $i < count($pociciones_mas_alta); $i++) { 
       $pocicion = $pociciones_mas_alta[$i];
       echo $apellidos[$pocicion]."<br>";
   }

   $pociciones_mas_baja = array_keys($notas, min($notas));

   echo "<h3>Los alumnos con la nota mas alta son: </h3>";

   for ($i=0; $i < count($pociciones_mas_baja); $i++) { 
       $pocicion = $pociciones_mas_baja[$i];
       echo $apellidos[$pocicion]."<br>";
   }



?>