<?php
    class customException extends Exception {
        public function errorEmailMessage() {
            // Mensaje de error personalizado, utilizando el email que recibimos como parametro.
            $errorMsg = 'Error en linea '.$this->getLine().' en '.$this->getFile()
            .': La direccion: <b>'.$this->getMessage().'</b> no es una direccion de email valida';
            return $errorMsg;
        }
    }

    $email = "someone@example...com";

    try {
        // Verifica que el string del email que se paso cumple con las caracteristicas basicas de un email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //Lanza una excepcion en caso de que no cumpla con la sintaxis basica
            throw new customException($email);
        }
    }

    // Capturamos las excepciones del tipo customException
    catch (customException $e) {

        //Muestra el mensaje personalizado de nuestra clase personalizada
        echo $e->errorEmailMessage();
    }
?>




