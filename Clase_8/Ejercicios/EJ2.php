
    <h1>Carga de datos</h1>
<?php
    $empresas = ['Amazon', 'Microsoft', 'Apple', 'Tesla', 'Facebook'];

    //Abrimos el archivo en modo escritura
    $archivo = fopen("empresas.txt", "w");

    for ($i=0; $i < count($empresas); $i++) { 
        $nombre = $empresas[$i];
        //Usamos el salto de linea para que nos esriba cada valor en una linea diferente
        fwrite($archivo, $nombre."\n");
        echo "Se agrego el nombre: $nombre al archivo <br>";
    }

    fclose($archivo);

    echo "Datos agregados correctamente";

?>
    <h1>Empresas</h1>
<?php
    
    // Abrir el archivo en modo lectura:
    $archivo = fopen("empresas.txt","r");

    // Recorremos el archivo mostando el contenido de cada línea
    # feof: Esta función comprueba si el puntero se encuentra al final del archivo
    while( feof($archivo) == false )
    {
       //fgets() y que nos devolverá una cadena de texto con el contenido 
       //de la línea en la que se encuentra el puntero al archivo. 
       echo fgets($archivo). "<br />";
    }

    // Cerramos el archivo
    fclose($archivo);
?>
