<?php
    /* Accion principal del programa */

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $p = 0;

    for ($i=$n1; $i <= $n2; $i++){
        $factoriales[$p] = factorial($i);
        $p++;
    }

    // echo $factoriales; // Muestra un error -> Warning: Array to string conversion in C:\Instalaciones\Xamp\htdocs\2Daw\DWES\iniciales\ejercicio_array\funcion.php on line 9
    //echo $factoriales[1]; // Muestra el valor en el indice 1 del array
    // echo $factoriales[12]; // Da error de indice -> Warning: Undefined array key 12 in C:\Instalaciones\Xamp\htdocs\2Daw\DWES\iniciales\ejercicio_array\funcion.php on line 11
    
    //print_r($factoriales); // Muestra el array completo
    //var_dump($factoriales); // Muestra el array completo con mas informacion


    /* Funcion que calcula el factorial de cada numero que mande el for anterior */
    function factorial($i){
        $total = 1;
        for ($j = 1; $j <= $i; $j++) {
            $total *= $j;
        }
        return $total;
    } 
?> 