<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Factoriales</title> 
        <?php
            require_once 'funcion.php';

            for ($i=0; $i <= 10; $i++){
                $factoriales[$i] = factorial($i);
            }
        ?>
    </head>
    <body>
        <table>
            <thead>
                <th colspan="2">Tabla de factoriales del 0 al 10</th>
            </thead>
            <tbody>
                <tr>
                    <td class="azul">Número</td>
                    <td class="azul">Factorial</td>
                </tr>
                <?php
                    for ($z = 0; $z < count($factoriales); $z++) {
                        echo '<tr><td>Factorial de '.$z.'</td><td>'.$factoriales[$z].'</td></tr>';
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Angel Guiberteau Franco</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>