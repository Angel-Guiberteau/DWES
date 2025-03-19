<?php
require_once 'db.php';
require_once 'fpdf/fpdf.php';

$db = new Db(); // Crear una instancia de la clase Db
$pdo = $db->conexion; // Accede a la conexión PDO desde la propiedad `conexion`

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Consulta a la base de datos
        $query = "SELECT nombreCiudad, puntuacion, vEducacion, vSanidad, vSeguridad, vEconomia FROM Partidas WHERE empezada = 't' ORDER BY puntuacion DESC;";
        $stmt = $pdo->query($query);
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Crear instancia de FPDF
        $pdf = new FPDF('P', 'mm', 'A3');
        $pdf->AddPage();
        $pdf->SetTitle('Datos de la tabla');
        $pdf->SetFont('Arial', '', 12);

        // Agregar estilo a la tabla
        $pdf->SetFillColor(50, 60, 100); // Color de fondo para encabezados
        $pdf->SetTextColor(255, 255, 255); // Color de texto blanco para encabezados

        // Verificar si hay resultados
        if (!empty($datos)) {
            // Agregar encabezados de la tabla
            $pdf->SetFont('Arial', 'B', 16); // Establecer fuente en negrita para encabezados
            foreach (array_keys($datos[0]) as $encabezado) {
                $pdf->Cell(47, 15, utf8_decode($encabezado), 1, 0, 'C', true);
            }
            $pdf->Ln();

            $pdf->SetFont('Arial', '', 12); // Restablecer fuente normal para las filas de datos

            // Cambiar el color para las filas de datos
            $pdf->SetTextColor(0); // Color de texto negro para las filas
            $fill = false; // Alternar colores para filas

            // Agregar filas de datos
            foreach ($datos as $fila) {
                foreach ($fila as $celda) {
                    $pdf->Cell(47, 15, utf8_decode($celda), 1, 0, 'C', $fill);
                }
                $fill = !$fill; // Alternar color de fondo
                $pdf->Ln();
            }
        } else {
            $pdf->Cell(0, 10, 'No hay datos disponibles.', 1, 1, 'C');
        }

        // Enviar el PDF al navegador para vista previa
        $pdf->Output('I', 'datos.pdf'); // Mostrar en el navegador
        
    } catch (Exception $e) {
        echo "Error al generar el PDF: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generar PDF</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color:rgb(226, 226, 227);
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            form {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            button {
                background-color: #007BFF;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                font-weight: bold;
                color: #000;
            }
            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <form method="post" target="_blank"> <!-- Abrir en una nueva pestaña -->
            <button type="submit">Generar PDF</button>
        </form>
    </body>
</html>
