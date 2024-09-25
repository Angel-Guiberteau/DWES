<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factorial</title>
    </head>
    <body>
        <?php 
            $total = 1;
            $i = 0;

            if($i == 0) {
                echo "Factorial de $i: $total<br>";
            }

            for ($i = 1; $i <= 5; $i++) {
                $total *= $i;
                echo "Factorial de $i: $total<br>";
            }   
        ?>
    </body>
</html>