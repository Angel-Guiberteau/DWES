<?php

    require_once 'ejemplo.php';

    $objEjemplo = new Ejemplo();
    $objEjemplo->metodo1();
    echo 'El dato es: '.$objEjemplo->dato;

?>