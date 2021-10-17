<?php
    class Producto{

        public static function registrar($nombre, $precio, $cantidad){
            
            $conexion = BD::crearConexion();

            // Codigo SQL para insertar datos en la tabla personas 
            $query = "INSERT INTO productos (Nombre, Precio, Cantidad) values ('$nombre','$precio','$cantidad')";
            $exito = mysqli_query($conexion, $query);
            
            if($exito){
                echo "Se guardaron correctamente los datos";
            }
            else{
                echo "Hubo un error al guardar los datos".mysqli_error($conexion);
            }
        }
    }
?>