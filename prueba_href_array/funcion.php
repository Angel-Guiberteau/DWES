<?php
    /* Funcion que calcula el factorial de cada numero que mande el for anterior y lo retorna para guardarlo en un array */
    function factorial($i){
        $total = 1;
        for ($j = 1; $j <= $i; $j++) {
            $total *= $j;
        }
        return $total;
    } 
?>
