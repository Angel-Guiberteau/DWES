<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Imagenes</title>
        <?php
            require_once "guardar.php";
        ?>
    </head>
    <body>
        <div class="container">
            <h1>Imagenes de concienciacion para la contaminacion</h1>
            <?php
                foreach ($imagenes as $nombre => $ruta) {
                    echo '<h2>'.$nombre.'</h2>';
                    echo '<img src="img/'.$ruta.'" alt="'.$nombre.'">';
                }
            ?>
        </div>
    </body>
</html>