<?php
    //Tranferimos los errores de MYSQL a exepciones PHP
    //Si no se usa este codigo los errores de MYSQL no podran ser capturados como expeciones
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class Producto{

        public $id;
        public $nombre;
        public $cantidad;
        public $precio;

        public function __construct($id, $nombre, $cantidad, $precio)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->cantidad = $cantidad;
            $this->precio = $precio;
        }

        public static function consultar(){
            $listaProductos = [];
            $conexion = BD::crearConexion();
            $consulta = "SELECT * FROM productos";

            try{

                $resultado = mysqli_query($conexion, $consulta);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption("no pudimos obtener los datos de los productos");
            }

            //Obtener la lista de usuarios 
            while ($producto= $resultado->fetch_object()) {

                $listaProductos[] = new Producto($producto->id, $producto->Nombre, $producto->Cantidad, $producto->Precio);
            }
            
            return $listaProductos;
            
        }

        public static function borrar($id){
            $conexion = BD::crearConexion();
            $query = "DELETE FROM productos WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito){
                echo "Hubo un error al eliminar el producto: ".mysqli_error($conexion);
            }
        }

        public static function editar($id, $nombre, $cantidad, $precio){
            $conexion = BD::crearConexion();
            $query = "UPDATE productos SET 
                                Nombre ='$nombre', 
                                Cantidad='$cantidad', 
                                Precio='$precio'  
                                WHERE id = '$id'";
            $exito = mysqli_query($conexion, $query);

            if(!$exito){
                echo "Hubo un error al actualizar el producto: ".mysqli_error($conexion);
            }
        }

        public static function buscar($id){
            //Obtenemos una conexion a la base de datos
            $conexion = BD::crearConexion();
            //Armamos la consulta que sera ejecutada en la base de datos
            $query = "SELECT * FROM productos WHERE id = '$id' ";

            //Vericamos que se ejecute correctamente la consulta y en caso contrario, capturamos el error
            try{
                $resultado = mysqli_query($conexion, $query);
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption("no pudimos obtener los datos del producto");
            }

            if (mysqli_num_rows($resultado) > 0){
                //Obtenemos el resultado como un objeto
                $producto = $resultado->fetch_object();

                //Devolvemos un objeto del tipo Producto
                return new Producto($producto->id, $producto->Nombre, $producto->Cantidad, $producto->Precio);
            }
            else{
                throw new DatabaseExeption("el producto con ese ID no se encuentro");
            }
            
        }

        public static function registrar($nombre, $precio, $cantidad){            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla personas 
            $query = "INSERT INTO productos (Nombre, Precio, Cantidad) values ('$nombre','$precio','$cantidad')";
            try{
                $exito = mysqli_query($conexion, $query);

                if($exito){
                    echo "Se guardaron correctamente los datos";
                }
            }
            catch(Exception $e){
                //Guardamos el mensaje para el programador
                guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
                //Lanzamos un mensaje para el usuario
                throw new DatabaseExeption("hubo un error al guardar los datos");
            }
        }
    }
?>