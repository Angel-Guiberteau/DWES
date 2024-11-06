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
                color: black;
                background-color: #aaafac;
            }

            tr:nth-child(even) {
                background-color: #d6f0df;
            }

            tr:hover {
                background-color: #d1eeea;
            }
            #section{
                text-align: center;
                display: flex;
                justify-content: center;
            }
            .eliminar, .modificar {
                display: inline-block;
                padding: 5px 10px;
                background-color: #55b49b;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
                margin-top: 5px;
            }
            .add-button{
                display: inline-block;
                padding: 10px 20px;
                background-color: #7de19f;
                color: black;
                font-weight: bold;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
                margin-top: 5px;
            }

            .add-button:hover{
                background-color: #51c97a;
                color: black;
            }

        </style>
    </head>
    <body>
        <h1>Listado de Alumnos</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Modificar Datos</th>
                <th>Eliminar el alumno</th>
            </tr>
            <?php
                require_once 'conexion.php';

                // Guardamos la consulta en una variable
                $sql = "SELECT id, nombre, apellido, fecha_nacimiento, email FROM Alumnos ORDER BY id;";
                $resultado = $conexion->query($sql); //Realizamos la consulta y guardamos su resultado

                if ($resultado->num_rows > 0) {

                    while ($fila = $resultado->fetch_assoc()) {

                        $sql2 = "SELECT YEAR(fecha_nacimiento) AS Ano FROM Alumnos WHERE id = " . $fila["id"]; // Obtenemos el año de nacimiento de cada id
                        $resultado2 = $conexion->query($sql2); // Guardamos el resultado
                        $fila2 = $resultado2->fetch_assoc(); // Obtenemos la fila

                        $edad = date("Y") - $fila2["Ano"]; //Calculamos los años del alumno usando el año actual del sistema


                        //Visualizamos los resultados
                        echo "<tr><td>{$fila['id']}</td><td>{$fila['nombre']}</td><td>{$fila['apellido']}</td><td>{$edad} años</td><td>{$fila['email']}</td><td><a class='modificar' href='modificar.php?id={$fila['id']}'>Modificar</a></td><td><a class='eliminar' href='eliminar.php?id={$fila['id']}'>Eliminar</a></td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 resultados</td></tr>";
                }
            ?>
        </table>
        <div id="section">
            <a href="anadirfilas.html" class="add-button">Añadir alumnos</a>
        </div>
    </body>
</html>
