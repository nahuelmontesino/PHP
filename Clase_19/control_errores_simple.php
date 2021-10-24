<?php
    $file=fopen("welcome.txt","r");
?>

<?php
    if(!file_exists("welcome.txt")) {
        die("No existe el archivo");
    } else {
        $file=fopen("welcome.txt","r");
    }

    echo "Esto nunca se va a mostrar si hay un error ya que se interrumpe la ejecucion con die()"
    
?>








