<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Ejercicio 5</title>
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

            form{
                margin: auto;
                width: 30%;
                border: 1px solid black;
                margin-bottom: 2rem;
                padding: 1%;
                text-align: center;
            }

            input[type="number"]{
                display: block;
                width: 100%;
                margin: 1% 1%;
            }
        </style>
    </head>
    <body>
        <form method="get" action="factorial.php">
            <label for="n1">Introduce el primer numero</label>
            <input type="number" name="n1" required>

            <label for="n2">Introduce el segundo numero</label>
            <input type="number" name="n2" required>

            <input type="submit" name="enviar">
        </form>
    </body>
</html>