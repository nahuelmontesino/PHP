<?php
    class customException extends Exception {
        public function errorMessage() {
            //Mensaje que sera mostrado al usuario
            $errorMsg = $this->getMessage().' no es un email valido';
            return $errorMsg;
        }
    }

    //En esta verificamos el email y lanzamos una excepcion que es usada por los programadores
    function verificacionEmail1($mail){
        //Verificamos el email
        if(strpos($mail, "example") !== FALSE) {
            //Lanzamos una excepcion para los programadores.
            throw new Exception($mail);
        }
    }

    //En esta verificamos si la verificion anterior produce una excepcion y 
    //re-lanzamos una excepcion que mas amigrable que sera mostrada al usuario

    function verificacionEmail2($mail){
        try {
            verificacionEmail1($mail);
        }
        catch(Exception $e) {
            //Esto podriamos usarlo para un log: $e->getMessage().$e->getLine().$e->getFile();

            //Re-lanzamos una excepcion con un mensaje mas amigable
            throw new customException($mail);
        }
    }

    $email = "someone@example.com";

    try {
        verificacionEmail2($email);
    }

    catch (customException $e) {
        //Mostramos el mensaje al usuario
        echo $e->errorMessage();
    }
?>