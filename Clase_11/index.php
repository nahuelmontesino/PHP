<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Primera pagina completa</h1>
    </header>

    <?php
        include_once "modulos/navegacion.php";
    ?>

    <section>
        <?php
            if(!empty($_GET['action'])){

                $action = $_GET['action'];

                switch ($action) {
                    case 'inicio':
                        include "modulos/inicio.php";
                        break;
                    case 'registrar':
                        include "modulos/registrar_cliente.php";
                        break;
                    case 'mostrar':
                        include "modulos/mostrar_clientes.php";
                        break;
                    default:
                        include "modulos/inicio.php";
                        break;
                }
            }
            else{
                include "modulos/inicio.php";
            }
        ?>
    </section>
</body>
</html>