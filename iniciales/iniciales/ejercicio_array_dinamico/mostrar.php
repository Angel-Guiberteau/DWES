<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factoriales</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <thead>
                <th colspan="2">
                    <?php
                        require_once 'funcion.php';
                        echo 'Tabla de factoriales del '.$n1.' al '.$n2;    
                    ?>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="azul">Número</td>
                    <td class="azul">Factorial</td>
                </tr>
                <?php
                    foreach ($factoriales as $indice => $valor) {
                        echo '<tr><td>Factorial de '.$n1.'</td><td>'.$valor.'</td></tr>';
                        $n1++;
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Angel Guiberteau Franco</td>
                </tr>
            </tfoot>
        </table>
        <?php 

            // print_r($factoriales); // Muestra el array completo
            // echo "<br>";
            // var_dump($factoriales); // Muestra el array completo con mas informacion

        ?>
    </body>
</html>