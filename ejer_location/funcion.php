<?php
    $n = $_GET['num'];  // Obtiene el valor de num

    if (parImpar($n,$cuadrado)) // Llama a la función parImpar y le pasa el valor de num y la variable cuadrado
        header("Location:par.php?num=$n&cuadrado=$cuadrado"); // Redirige a par.php
    else
        header("Location:impar.php?num=$n&cuadrado=$cuadrado"); // Redirige a impar.php

    function parImpar($n,&$cuadrado) { // &$cuadrado es una variable por referencia
        $cuadrado = $n * $n; // Calcula el cuadrado de n y lo guarda en la variable cuadrado
        if ($n % 2 == 0) 
            return true; // Retorna true si n es par
        else 
            return false; // Retorna false si n es impar
    }

?>