<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="resources/icono.ico" type="image/x-icon">
        <title>Mostrar</title>
    </head>
    <body>
        <div id="datos">
            <h1>Datos enviados</h1>
            <?php
                // foreach($_GET as $variable => $valor){
                //     echo '<p><span class="negrita">'.$variable.'</span> = '.$valor.'</p>';
                // }

                if(!empty($_GET['nombre']))
                    echo "<p><span class='negrita'>Nombre:</span> ".$_GET['nombre']."</p>";

                if(!empty($_GET["apellidos"]))
                    echo "<p><span class='negrita'>Apellidos:</span> ".$_GET['apellidos']."</p>";

                if(!empty($_GET['sexo']))
                    echo "<p><span class='negrita'>Sexo:</span> ".$_GET['sexo']."</p>";

                if(!empty($_GET["fecha_suceso"]))
                    echo "<p><span class='negrita'>Fecha del suceso: </span>".$_GET['fecha_suceso']."</p>";

                if(!empty($_GET["ubicacion"]))
                    echo "<p><span class='negrita'>Ubicacion del suceso: </span>".$_GET['ubicacion']."</p>";

                if(isset($_GET['tipo_suceso']))
                {   
                    foreach($_GET['tipo_suceso'] as $indice => $valor)
                        echo "<p><span class='negrita'>Causa del suceso: </span>".$valor."</p>";

                    // for($l=0; $l<count($_GET["tipo_suceso"]); $l++)
                    //     echo "<p><span class='negrita'>Causa del suceso: </span>".$_GET["tipo_suceso"][$l]."</p>";
                }

                if(!empty($_GET["experiencia"]))
                    echo "<p><span class='negrita'>Descripcion del suceso: </span>".$_GET['experiencia']."</p>";

                // var_dump($_GET["tipo_suceso"]);
            ?>
        </div>
    </body>
</html>