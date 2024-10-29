<?php

    require_once 'conexion.php';

    $sql = "SELECT * FROM alumnos ORDER BY nombre ASC;";
    //echo $sql;
    $resultado = $conexion->query($sql);
    
    while($fila = $resultado->fetch_array()){
        foreach ($fila as $indice => $valor) {
            echo $indice.': '.$valor.'<br/>';
        }
        echo '-------------------------------------------------- <br>';
    }
?>