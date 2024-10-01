<?php
    echo "<h1>Datos generales enviados print_r</h1>";
    print_r($_GET);
    echo "<br/>";
    echo "<br/>";
    echo "<h1>Datos generales enviados var_dump</h1>";
    var_dump($_GET);
    echo "<br/>";
    echo "<br/>";
    /*checkbox*/
    echo "<h1>Datos enviados checkbox</h1>";
    print_r($_GET["tipo_suceso"]);
    echo "<br/>";
    echo "<br/>";
    var_dump($_GET["tipo_suceso"]);
?>