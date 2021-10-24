<?php
    class customException extends Exception {
        public function errorEmailMessage() {
            //error message
            $errorMsg = 'Error '.': La direccion: <b>'.$this->getMessage().'</b> no es una direccion de email valida';
            return $errorMsg;
        }
    }

    $email = "someone@example...com";

    try {
        //Verifica que el string del email que se paso cumple con las caracteristicas basicas de un email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //Lanza una excepcion en caso de que no cumpla con la sintaxis basica
            throw new customException($email);
        }
    }

    catch (customException $e) {
        //Muestra un mensaje personalizado
        echo $e->errorEmailMessage();
    }
?>