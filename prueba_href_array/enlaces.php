<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factorial enlaces</title>
        <?php
            require_once 'funcion.php'; // Incluimos el archivo funcion.php

            for ($i=0; $i <= 10; $i++){
                $factoriales[$i] = factorial($i); // Guardamos en un array los factoriales de los numeros del 0 al 10
            }
        ?>
    </head>
    <body>
        <?php
            foreach ($factoriales as $indice => $valor){ // Recorremos el array de factoriales generando enlaces para mostrar el resultado
                echo '<a href="factorial.php?factorial='.$valor.'&num='.$indice.'">Factorial de '.$indice.'</a><br/>';
            }
        ?>  
    </body>
</html>     