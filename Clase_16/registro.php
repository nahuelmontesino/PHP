<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <h1 style="text-align:center">Datos de usuario</h1>
  	<form method="POST" action="registro.php" >

  	<div class="form-group">
	    <label for="doc">Documento</label>
	    <input type="text" name="doc" class="form-control" id="doc">
	</div>

	<div class="form-group">
	    <label for="nombre">Nombre </label>
	    <input type="text" name="nombre" class="form-control" id="nombre">
	</div>

   <div class="form-group">
	    <label for="dir">Direccion </label>
	    <input type="text" name="dir" class="form-control" id="dir">
	</div>

	<div class="form-group">
	    <label for="tel">Telefono </label>
	    <input type="text" name="tel" class="form-control" id="tel">
	</div>
    
    <div style="text-align:center">
	  <button type="submit" value="registrar" class="btn btn-success" name="btn"> Registrar </button>
	  <button type="submit" value="consulta_dni" class="btn btn-primary" name="btn">Consultar por DNI</button>
      <button type="submit" value="consulta_nombre" class="btn btn-primary" name="btn">Consultar por nombre</button>
      <button type="submit" value="actualizar" class="btn btn-info" name="btn">Actualizar </button>
      <button type="submit" value="eliminar" class="btn btn-danger" name="btn">Eliminar por DNI</button>
	</div>

  	</form>

  <?php

    include_once "clases.php";
	include_once "database.php";

  	if(isset($_POST['btn']))
  	{
		$buttonOption = $_POST['btn'];
		$dni = $_POST['doc'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['dir'];
		$telefono = $_POST['tel'];
	
		$database = new Database();

		switch ($buttonOption) {
			case 'registrar':
				if(empty($dni) || empty($nombre) || empty($direccion))
				{
					echo "Los campos DNI, nombre y apellido son obligatorios";
				}
				else
				{
					$user = new Usuario($dni, $nombre, $direccion, $telefono);
					$database->guardarUsuario($user);
				}
				break;
				
			case 'consulta_nombre':
				foreach ($database->obtenerUsuariosPorNombre($nombre) as $usuario)
				{
					echo "DNI: {$usuario->getDni()}<br>";
					echo "Nombre: $usuario->nombre<br>";
					echo "Telefono: $usuario->direccion<br>";
					echo "Direccion: $usuario->telefono<br>";
					echo "------------------------------------------<br>";
				}
				break;
			case 'consulta_dni':
				if(!empty($dni))
				{
					$usuario = $database->obtenerUsuarioPorDni($dni);
					if($usuario)
					{
						echo "DNI: {$usuario->getDni()}<br>";
						echo "Nombre: $usuario->nombre<br>";
						echo "Telefono: $usuario->direccion<br>";
						echo "Direccion: $usuario->telefono<br>";
						echo "------------------------------------------<br>";
					}
				}

				break;
				
			case 'actualizar':
				if(empty($dni) || empty($nombre) || empty($direccion))
				{
					echo "Los campos DNI, nombre y apellido son obligatorios";
				}
				else
				{
					$user = new Usuario($dni, $nombre, $direccion, $telefono);
					$database->actualizarUsuario($user);
				}

				break;

			case 'eliminar':
				$database->eliminarUsuarioPorDni($dni);
				break;
		}

		$database->cerrarConexion();
	} 
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>