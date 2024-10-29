<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Alumno</title>
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
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h1>Detalles del Alumno</h1>

<table>
    <tr>
        <th>Campo</th>
        <th>Valor</th>
    </tr>

    <?php
        require_once 'conexion.php';

        // Guardamos la consulta en una variable
        $sql = "SELECT id, nombre, apellido, fecha_nacimiento FROM Alumnos ORDER BY nombre";

        $resultado = $conexion->query($sql); // Realizamos la consulta y guardamos su resultado

        // Obtenemos una fila de resultados
        $fila = $resultado->fetch_assoc(); 

        // Mostrar los valores de la fila
        echo "<tr><td>Nombre</td><td>" . $fila["nombre"] . "</td></tr>";
        echo "<tr><td>Apellido</td><td>" . $fila["apellido"] . "</td></tr>";
    ?>

</table>

</body>
</html>
