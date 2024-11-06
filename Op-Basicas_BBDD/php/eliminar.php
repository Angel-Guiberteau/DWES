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
            
            #section{
                text-align: center;
                display: flex;
                justify-content: center;
                gap: 30px;
            }
            .add-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
                margin-top: 5px;
            }
        </style>
    </head>
    <body>
        <h1>¿Estas seguro de eliminar este alumno?</h1>
            
            <?php
            
                require_once 'conexion.php';

                //Guardamos la consulta en una variable

                $sql = "SELECT * FROM Alumnos WHERE id=".$_GET['id'].";";
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
        </table>
        <div id="section">
            <a href="eliminar_intermedio.php?id=<?php echo $_GET['id']; ?>" class="add-button">Eliminar</a>
            <a href="mostrartodo.php" class="add-button">Volver</a>
        <div>
    </body>
</html>
