<?php
    
    require_once 'conexion.php';

    // Guardamos la consulta en una variable
    $sql = "INSERT INTO Alumnos (nombre,apellido,fecha_nacimiento,email) VALUES ('".$_POST['nombre']."','". $_POST['apellido']."','". $_POST['fecha_nacimiento']."','". $_POST['email']."');";

    
    $resultado = $conexion->query($sql); //Realizamos la consulta y guardamos su resultado

    $fila_afectada = $conexion->affected_rows;
    
    // $errno = $conexion->errno; //Guardamos el numero de error en una variable
    // $error = $conexion->error; //Guardamos el mensaje de error en una variable
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guardar</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .message {
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
            }
            .message.success {
                background-color: #d4edda;
                color: #155724;
                border: 1px solid #c3e6cb;
            }
            .message.error {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
            }  

            .vol {
                display: inline-block;
                padding: 10px 20px;
                margin: 5px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .vol:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
      
        <div>
            <?php
                if($fila_afectada > 0) {
                    echo '<div class="message success"><p>Se ha insertado correctamente</p></div>';
                } else {
                    echo '<div class="message error"><p>No se ha insertado correctamente</p></div>';
                }

                header("refresh:2;url=mostrartodo.php");
            ?>
        </div>
    </body>
</html>


    