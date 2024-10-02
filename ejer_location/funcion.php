<?php
    $n = $_GET['num'];

    if (parImpar($_GET['num'],$cuadrado))
        header("Location:par.php?num=$n&cuadrado=$cuadrado");
    else
        header("Location:impar.php?num=$n&cuadrado=$cuadrado");

    function parImpar($n,&$cuadrado) {
        $cuadrado = $n * $n;
        if ($n % 2 == 0) 
            return true;
        else 
            return false;
    }

?>