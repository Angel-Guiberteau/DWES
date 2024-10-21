<?php   

    // Cargar las dependencias necesarias usando Composer
    require 'vendor/autoload.php';

    // Usamos la librería PhpSpreadsheet para manejar archivos de Excel
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // Ruta del archivo Excel existente
    $rutaArchivo = 'subidos/Lista2DAW.xlsx';

    // Cargar el archivo Excel
    $hojaCalculo = IOFactory::load($rutaArchivo);

    // Seleccionar la primera hoja de trabajo (o cualquier otra hoja)
    $hojaTrabajo = $hojaCalculo->getSheet(0); // Primera hoja del archivo

    // Datos nuevos que queremos añadir (array asociativo)
    $nuevosEstudiantes = array(
        0=> array(
            'numero'=> 21,
            'nombre'=> 'no',
        ),
        1=> array(
            'numero'=> 22,
            'nombre'=> 'si',
        )
    );
        

    // Encontrar la primera fila completamente vacía para añadir nuevos datos
    $ultimaFila = $hojaTrabajo->getHighestRow();

    // Incrementar la fila hasta encontrar una fila vacía
    while (true) {
        $ultimaFila++;
        $filaVacia = true; // Asumir que la fila es vacía
        for ($columna = 'A'; $columna <= 'C'; $columna++) { // Cambiar el rango de columnas según sea necesario
            if ($hojaTrabajo->getCell($columna . $ultimaFila)->getValue() !== null) {
                $filaVacia = false; // Si encontramos un valor, no está vacía
                break; // Salir del bucle
            }
        }
        
        if ($filaVacia) {
            break; // Si la fila es vacía, salir del bucle
        }
    }

    // Añadir los nuevos estudiantes debajo de la primera fila vacía encontrada
    foreach ($nuevosEstudiantes as $estudiante) {
        $hojaTrabajo->fromArray($nuevosEstudiantes, NULL, 'A21');
        $ultimaFila++; // Pasar a la siguiente fila
    }

    // Guardar el archivo Excel actualizado
    $writer = new Xlsx($hojaCalculo);
    $writer->save($rutaArchivo);

    echo "Datos nuevos añadidos correctamente al archivo Excel.";

?>
