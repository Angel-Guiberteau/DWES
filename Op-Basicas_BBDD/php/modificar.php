<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Alumnos</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid #ccc;
            }
            th, td {
                padding: 10px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            form {
                width: 80%;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #fff;
                border-radius: 5px;
            }

            form label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            form input[type="text"],
            form input[type="date"],
            form input[type="email"] {
                width: calc(100% - 22px);
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            form input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }

            form input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <h1>Modificar Datos de Alumnos</h1>
            
            <?php
            
                require_once 'conexion.php';

                //Guardamos la consulta en una variable

                $sql = "SELECT * FROM alumnos WHERE id=".$_GET['id'];
                $resultado = $conexion->query($sql); //Realizamos la consulta y guardamos su resultado

                if ($resultado->num_rows > 0) {
                    $fila = $resultado->fetch_assoc();

                    echo '<table>';
                    echo '<tr><th>Nombre</th><td>'.$fila['nombre'].'</td></tr>';
                    echo '<tr><th>Apellido</th><td>'.$fila['apellido'].'</td></tr>';
                    echo '<tr><th>Fecha de Nacimiento</th><td>'.$fila['fecha_nacimiento'].'</td></tr>';
                    echo '<tr><th>Correo</th><td>'.$fila['email'].'</td></tr>';
                    echo '</table>';
                } else {
                    echo 'No se ha encontrado el alumno';
                }

            ?>
            <h1>Modificar Datos</h1>
            <form action="modificar_intermedia.php" method="post">
                <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $fila['apellido']; ?>"><br>

                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento']; ?>"><br>

                <label for="email">Correo:</label>
                <input type="email" name="email" value="<?php echo $fila['email']; ?>"><br>

                <input type="submit" value="Modificar">
            </form>
        </table>
    </body>
</html>
