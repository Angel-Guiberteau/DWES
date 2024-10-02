<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Impar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="impar">
        <div class="container">
            <?php
                echo '<h1 id="titulo">Numero impar</h1><p id="">Numero: '.$_GET['num'].'</p><p>Cuadrado: '.$_GET['cuadrado'].'</p>';
            ?>    
            <a href="index.html">Volver</a>
        </div>
    </body>
</html>
