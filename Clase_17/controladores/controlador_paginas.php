<?php
    include_once "conexion.php";
    include_once "modelos/producto.php";

    class ControladorPaginas{

        public function plantilla(){
            //Plantilla principal de la aplicacion
            include_once "vistas/template.php";
        }

        public function obtenerPagina(){

            if( isset($_GET['accion']) ){
                
                //Obtenemos el valor del boton del menu que se apreto
                $accion = $_GET['accion'];
                
                //Llamamos al metodo que tenga el mismo nombre que la accion 
                return $this->$accion();
            }

        }

        //Carga de la vista inicio, a partir de los datos obtenidos de la base de datos
        private function inicio(){
            
            #Todabia falta implementar la logica de traer los datos y mostrarlos en la tabla
            return include_once "vistas/producto/inicio.php";
        }

        //Lla
        private function registrar(){
            //Verificamos que los datos se hallan enviado por el metodo POST
            if($_POST){
                $nombre = $_POST['nombre'];
                $cantidad = $_POST['cantidad'];
                $precio = $_POST['precio'];
                Producto::registrar($nombre, $precio, $cantidad);
            }
            return include_once "vistas/producto/registrar.php";
        }
    }

?>