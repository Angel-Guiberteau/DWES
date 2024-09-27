<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <style>
            table {
                border-collapse: collapse;
                width: 40%;
                margin: 0 auto;
                text-align: center;
            }

            th, td {
                border: 1px solid black;
                padding: 10px;
            }

            .azul{
                color: blue;
                font-size: 1.5rem;
            }
        </style>
        <?php
            include "factorial.php";
        ?>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="3">Tabla de factoriales del 1 al 10</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="azul">Número</td>
                    <td class="azul">Factorial</td>
                </tr>
                <?php
                    for ($i = 0; $i <= 10; $i++) {
                        $total = factorial($i);
                        echo "<tr><td>Factorial de $i</td><td>$total</td></tr>";
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