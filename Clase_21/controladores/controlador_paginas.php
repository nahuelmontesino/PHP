<?php
    require_once "conexion.php";
    require_once "modelos/producto.php";
    require_once "exepciones.php";
    require_once "log.php";

    //Para manejar errores que no son excepciones
    set_error_handler('errorHandler');

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
            try{
                $productos = Producto::consultar();
                return include_once "vistas/producto/inicio.php";
            }
            catch(DatabaseExeption $e){
                $error = $e->errorMessage();
                return include_once "vistas/error.php";
            }
            //Esta la usamos para capturar cualquier otro error
            catch (Exception $e){
                $error = "se produjo un error obtener los productos";
                return include_once "vistas/error.php";
            }
            
        }

        private function registrar(){
            //Verificamos que los datos se hallan enviado por el metodo POST
            try{
                if(isset($_POST['btn'])){
                    $nombre = $_POST['nombre'];
                    $cantidad = $_POST['cantidad'];
                    $precio = $_POST['precio'];
                    validarForm($nombre, $cantidad, $precio);
                    Producto::registrar($nombre, $precio, $cantidad);
                }
                return include_once "vistas/producto/registrar.php";
            }
            catch (DatabaseExeption $e){
                $error = $e->errorMessage();
                return include_once "vistas/error.php";
                
            }
            catch (FormularioException $form){
                $error = $form->errorMessage();
                return include_once "vistas/producto/registrar.php";
            }
            //Esta la usamos para capturar cualquier otro error
            catch (Exception $e){
                $error = "se produjo un error al registrar";
                return include_once "vistas/error.php";
            }
            
        }

        private function editar(){
            try{
                if(isset($_GET['id'])){
                    $producto =  Producto::buscar($_GET['id']);
                }
    
                if($_POST){
                    
                    $id = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $cantidad = $_POST['cantidad'];
                    $precio = $_POST['precio'];
                    Producto::editar($id, $nombre, $precio, $cantidad);
                    header("Location:./?accion=inicio");
                }
    
                return include_once "vistas/producto/editar.php";
            }
            catch(DatabaseExeption $e){
                $error = $e->errorMessage();
                return include_once "vistas/error.php";
            }
            catch(Exception $e){
                $error = "ocurrio un error al cargar la vista";
                return include_once "vistas/error.php";
            }
            
            
        }

        private function borrar(){
            if(isset($_GET['id'])){
                Producto::borrar($_GET['id']);

                header("Location:./?accion=inicio");
            }
            
        }
    }

?>