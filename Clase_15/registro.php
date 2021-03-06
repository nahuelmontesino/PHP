<html>
<head>
  <title>Programando Ando</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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
    
    <div style="text-align:center"><input type="submit" value="Registrar" class="btn btn-success" name="btn1"></div>

  	</form>

  <?php
  	if(isset($_POST['btn1']))
  	{
		include_once "clases.php";
		include "database.php";
		
		$dni = $_POST['doc'];
		$nombre = $_POST['nombre'];
		$direccion = $_POST['dir'];
		$telefono = $_POST['tel'];

		$user = new Usuario($dni, $nombre, $direccion, $telefono);

		$database = new Database();
		$database->guardarUsuario($user);


		// Recorremos la litsa de Usuarios 
		foreach ($database->obtenerUsuarios() as $usuario) {
			echo "DNI: {$usuario->getDni()}<br>";
			echo "Nombre: $usuario->nombre<br>";
			echo "Telefono: $usuario->direccion<br>";
			echo "Direccion: $usuario->telefono<br>";
			echo "------------------------------------------<br>";
		}
	} 
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>