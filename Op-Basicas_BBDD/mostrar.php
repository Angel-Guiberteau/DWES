<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Escuela";

    // Crear conexión
    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Selecciona los campos id, nombre, apellido y fecha_nacimiento
    $sql = "SELECT id, nombre, apellido, fecha_nacimiento FROM Alumnos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Mostrar datos de cada fila
        while ($fila = $resultado->fetch_assoc()) {
            // Calcular la edad a partir de la fecha de nacimiento
            $fecha_nacimiento = new DateTime($fila["fecha_nacimiento"]);
            $hoy = new DateTime();
            $edad = $hoy->diff($fecha_nacimiento)->y; // Calcula la diferencia en años
            
            echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " " . $fila["apellido"] . " - Edad: " . $edad . " años<br>";
        }
    } else {
        echo "0 resultados";
    }

    $conexion->close();
?>
