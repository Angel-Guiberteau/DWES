<?php

    // Cargar las dependencias necesarias usando Composer
    require 'vendor/autoload.php';

    // Usamos la librería PhpSpreadsheet para manejar archivos de Excel
    use PhpOffice\PhpSpreadsheet\IOFactory;

    // Ruta del archivo Excel existente
    $rutaArchivo = 'subidos/Lista2DAW.xlsx';

    // Cargar el archivo Excel
    $hojaCalculo = IOFactory::load($rutaArchivo);

    // Obtener todas las hojas del archivo
    $hojas = $hojaCalculo->getSheetNames();

    // Definir un array para almacenar los datos de los estudiantes de todas las hojas
    $estudiantes = [];

    // Recorrer todas las hojas del archivo
    foreach ($hojas as $nombreHoja) {
        // Seleccionar la hoja actual por su nombre
        $hojaTrabajo = $hojaCalculo->getSheetByName($nombreHoja);

        // Recorrer las filas de la hoja de cálculo, comenzando desde la fila 2 para saltar la cabecera
        foreach ($hojaTrabajo->getRowIterator(2) as $fila) {
            // Obtener un iterador para las celdas de la fila actual
            $iteradorCelda = $fila->getCellIterator();
            
            // Usamos el iterador para que solo recorra las celdas que tienen valor
            $iteradorCelda->setIterateOnlyExistingCells(true);

            // Crear un array temporal para almacenar los datos de un estudiante
            $datosEstudiante = [];

            // Recorrer cada celda de la fila
            foreach ($iteradorCelda as $celda) {
                // Obtener el valor de la celda y añadirlo al array de datos del estudiante
                $datosEstudiante[] = $celda->getValue();
            }

            // Si la fila tiene datos, añadir los datos del estudiante al array general de estudiantes
            if (!empty(array_filter($datosEstudiante))) {
                $estudiantes[] = $datosEstudiante;
            }
        }
    }

    // Mostrar los datos de los estudiantes en formato tabla HTML
    if (!empty($estudiantes)) {
        echo '<table border="1" style="border-collapse:collapse; width: 50%; text-align: center; margin: 0 auto;">';
        echo '<thead><tr><th>Número</th><th>Nombre</th></tr></thead>';
        echo '<tbody>';
        foreach ($estudiantes as $estudiante) {
            echo "<tr>";
            foreach ($estudiante as $dato) {
                echo "<td>" . $dato . "</td>"; 
            }
            echo "</tr>";
        }
        echo '</tbody></table>';
    } else {
        echo "No hay datos de estudiantes disponibles en el archivo.";
    }

?>
