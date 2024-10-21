<?php

    // Cargar las dependencias necesarias usando Composer
    require 'vendor/autoload.php';

    // Usamos la librería PhpSpreadsheet para manejar archivos de Excel
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // Crear un nuevo archivo de Excel
    $spreadsheet = new Spreadsheet();
    $hojaTrabajo = $spreadsheet->getActiveSheet();

    // Definir los datos de los estudiantes en un array asociativo
    $nuevosEstudiantes = array(
        0 => array(
            'numero' => 21,
            'nombre' => 'no',
        ),
        1 => array(
            'numero' => 22,
            'nombre' => 'si',
        )
    );

    // Escribir los encabezados en la primera fila
    $hojaTrabajo->setCellValue('A1', 'Número');
    $hojaTrabajo->setCellValue('B1', 'Nombre');

    // Recorrer el array de estudiantes e introducir los datos en la hoja de Excel
    $fila = 2; // Comenzamos desde la fila 2 porque la fila 1 contiene los encabezados

    foreach ($nuevosEstudiantes as $estudiante) {
        $hojaTrabajo->setCellValue('A' . $fila, $estudiante['numero']); // Escribir el número
        $hojaTrabajo->setCellValue('B' . $fila, $estudiante['nombre']); // Escribir el nombre
        $fila++;
    }

    // Definir un nombre personalizado para el archivo Excel
    $nombreArchivo = 'ListaEstudiantes_.xlsx';

    // Especificar la ruta donde se guardará el archivo
    $rutaArchivo = 'subidos/' . $nombreArchivo;

    // Guardar el archivo en la carpeta 'subidos'
    $writer = new Xlsx($spreadsheet);
    $writer->save($rutaArchivo);

    echo "Datos introducidos correctamente en el archivo Excel: " . $nombreArchivo;

?>
