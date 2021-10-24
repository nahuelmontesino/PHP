<?php
    class customException extends Exception {
        public function errorMessage() {
            //error message
            $errorMsg = 'Error en linea '.$this->getLine().' en '.$this->getFile()
            .': La direccion: <b>'.$this->getMessage().'</b> no es una direccion de email valida';
            return $errorMsg;
        }
    }

    $email = "someone@example.com";

    try {
        //Verifica si el email es valido
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //throw exception if email is not valid
            throw new customException($email);
        }

        //verifica que la palabra example este en el email, en ese caso lanza una excepcion
        if(strpos($email, "example") !== FALSE) {
            throw new Exception("$email es un email tipo ejemplo");
        }
    }

    catch (customException $e) {
        echo $e->errorMessage();
    }

    catch(Exception $e) {
      echo $e->getMessage();
    }
?>

