<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require_once 'operaciones.php';
                   
            // Creamos un objeto de la clase Operaciones y le pasamos los dos numeros por parametro
            $objOperacion = new Operaciones($_GET['num1'], $_GET['num2']);

            // Llamamos a la funcion calcular y le pasamos la operacion que queremos realizar
            echo $objOperacion->calcular( $_GET['operacion']);

        ?>
    </body>
</html>