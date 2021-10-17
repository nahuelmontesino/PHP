<?php
    include_once "clases.php";

    class Database{
        // Parametros a configurar para la conexion de la base de datos 
        private $host = "localhost";		//Nombre del host o server al que nos conectamos
        private $basededatos = "test";	//Nombre de la base de datos
        private $nombreusuario = "root";  	//Nombre de usuario de la BD
        private $contraseña = "";   	//Contraseña de la BD
        private $tabla_db1 = "personas";
        private $conexion;

        public function __construct()
        {
            $conexion = mysqli_connect($this->host, $this->nombreusuario, $this->contraseña, $this->basededatos);

            // Chequea la coneccion
            if (!$conexion) {
                die("La conexion fallo: " . mysqli_connect_error());
            }
            else
            {
                $this->conexion = $conexion;
            }
        }
        
        public function cerrarConexion(){
            mysqli_close($this->conexion);
        }

        public function guardarUsuario(Usuario $user){
            $query = "INSERT INTO $this->tabla_db1 (DNI, Nombre, Direccion, Telefono) 
                      VALUES ('{$user->getDni()}', '{$user->nombre}', '{$user->direccion}', '{$user->telefono}')";
            
            $exito = mysqli_query($this->conexion, $query);

            if($exito){
                echo "Se registro correctamente el usuario<br>";
            }
            else{
                echo "Hubo un error al registrar el usuario: ".mysqli_error($this->conexion);
            }

        }

        
        public function obtenerUsuarioPorDni($dni){
            $consulta = "SELECT * FROM $this->tabla_db1 WHERE DNI = '$dni'";
            if ($resultado = mysqli_query($this->conexion, $consulta)) {
                if (mysqli_num_rows($resultado) > 0){
                    //Obtener la lista de usuarios 
                    while ($usuario = $resultado->fetch_object()) {

                        $user = new Usuario($usuario->DNI, $usuario->Nombre, $usuario->Direccion, $usuario->Telefono);
                        return $user;
                    }
                }
                else
                {
                    echo "No existe ningun usuario con ese DNI";
                }
            }
            else{
                echo "Hubo un error al obtener el usuario:  ".mysqli_error($this->conexion);
            }


        }

        public function obtenerUsuariosPorNombre($nombre){
            $usuarios = [];
            $consulta = "SELECT * FROM $this->tabla_db1 WHERE Nombre LIKE '%$nombre%'";
            if ($resultado = mysqli_query($this->conexion, $consulta)) {
                //Obtener la lista de usuarios 
                while ($usuario = $resultado->fetch_object()) {

                    $usuarios[] = new Usuario($usuario->DNI, $usuario->Nombre, $usuario->Direccion, $usuario->Telefono);
                }
            }
            else{
                echo "Hubo un error al obtener los usuarios:  ".mysqli_error($this->conexion);
            }

            return $usuarios;
        }

        public function actualizarUsuario(Usuario $user)
        {
            //Verificamos que exista un usuario con ese dni en la base de datos
            $usuarioDB = $this->obtenerUsuarioPorDni($user->getDni());

            if($usuarioDB)
            {
                $query = "UPDATE $this->tabla_db1 SET
                Nombre = '$user->nombre',
                Direccion =  '$user->direccion',
                Telefono = '$user->telefono'
                WHERE DNI ='{$user->getDni()}'";
      
                $exito = mysqli_query($this->conexion, $query);

                if($exito){
                    echo "Se actualizo correctamente el usuario<br>";
                }
                else{
                    echo "Hubo un error al actualizar el usuario: ".mysqli_error($this->conexion);
                }
            }
        }

        public function eliminarUsuarioPorDni($dni)
        {
            //Verificamos que exista un usuario con ese dni en la base de datos
            $usuarioDB = $this->obtenerUsuarioPorDni($dni);
            if($usuarioDB)
            {
                $query = "DELETE FROM $this->tabla_db1 WHERE DNI = '$dni'";

                $exito = mysqli_query($this->conexion, $query);

                if($exito){
                    echo "Se elimino correctamente el usuario<br>";
                }
                else{
                    echo "Hubo un error al eliminar el usuario: ".mysqli_error($this->conexion);
                }
            }
        }
    }

?>