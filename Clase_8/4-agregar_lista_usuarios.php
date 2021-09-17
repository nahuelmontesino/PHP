<?php
    //Abrimos el archivo en modo lectura
    //En caso de que no exista el archivo lo crea
    $archivo = fopen("usuarios.txt", "w");

    //Agregamos los nombres de usuarios a nuestro archivo
    fwrite($archivo, "Fernando Bastida \n");
    fwrite($archivo, "Juan Perez \n");
    fwrite($archivo, "Alfonzo Gomez \n");
    fwrite($archivo, "Ignacion Flores \n");

    fclose($archivo);

    echo "Se ha escrito correctamente el archivo";

?>