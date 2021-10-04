<?php
    include_once "clases.php";

    class Database{
        // Parametros a configurar para la conexion de la base de datos 
        private $host = "localhost";		//Nombre del host o server al que nos conectamos
        private $basededatos = "test";	//Nombre de la base de datos
        private $nombreusuario = "root";  	//Nombre de usuario de la BD
        private $contraseña = "";   	//Contraseña de la BD
        private $tabla_db1 = "personas";

        //Funcion privada ya que se usa solo dentro de la clase
        private function abrirConexion(){
            // Crea la conexion
            $conexion = mysqli_connect($this->host, $this->nombreusuario, $this->contraseña, $this->basededatos);

            // Chequea la coneccion
            if (!$conexion) {
                die("La conexion fallo: " . mysqli_connect_error());
            }
            else
            {
                return $conexion;
            }
        }
        
        //Funcion privada ya que se usa solo dentro de la clase
        private function cerrarConeccion($conexion){
            mysqli_close($conexion);
        }

        public function guardarUsuario(Usuario $user){
            $conexion = $this->abrirConexion();
            $query = "INSERT INTO $this->tabla_db1 (DNI, Nombre, Direccion, Telefono) 
                      VALUES ('{$user->getDni()}', '{$user->nombre}', '{$user->direccion}', '{$user->telefono}')";
            
            $exito = mysqli_query($conexion, $query);

            if($exito){
                echo "Se registro correctamente el usuario<br>";
            }
            else{
                echo "Hubo un error al registrar el usuario: ".mysqli_error($conexion);
            }

            $this->cerrarConeccion($conexion);
        }

        public function obtenerUsuarios(){
            $conexion = $this->abrirConexion();
            $usuarios = [];
            $consulta = "SELECT * FROM $this->tabla_db1";
            if ($resultado = mysqli_query($conexion, $consulta)) {
                //Obtener la lista de usuarios 
                while ($usuario = $resultado->fetch_object()) {

                    $usuarios[] = new Usuario($usuario->DNI, $usuario->Nombre, $usuario->Direccion, $usuario->Telefono);
                }
            }

            $this->cerrarConeccion($conexion);

            return $usuarios;
        }

    }

?>