<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require_once 'fecha.php';
            $objFecha = new Fecha();

            echo $objFecha->cambiarFecha($_GET['fecha']); 

            echo $objFecha->mostrarBisiesto();        
        ?>
    </body>
</html>