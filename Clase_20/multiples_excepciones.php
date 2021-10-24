<?php
    class customException extends Exception {
        public function errorMessage() {
            //error message
            $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
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

        //verifica que la palabra example este en el email
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