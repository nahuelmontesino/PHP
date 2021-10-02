<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";		//Nombre del host o server al que nos conectamos
	$basededatos = "test";	//Nombre de la base de datos
	$nombreusuario = "root";  	//Nombre de usuario de la BD
	$contraseña = "";   	//Contraseña de la BD

	// Crea la conexion
	$conexion = mysqli_connect($host, $nombreusuario, $contraseña, $basededatos);

	// Chequea la coneccion
	if (!$conexion) {
	    die("La conexion fallo: " . mysqli_connect_error());
	}

	echo "Conectado exitosamente";
	echo "<br>"

?>