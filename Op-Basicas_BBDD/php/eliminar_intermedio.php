<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar Alumno</title>
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
        </style>
    </head>
    <body>
        <?php
            require_once 'conexion.php';
            
            $id = $_GET['id'];

            $sql = "DELETE FROM alumnos WHERE id = '$id'";
            $resultado = $conexion->query($sql);
            $fila_afectada = $conexion->affected_rows;

        ?>
        <div class="container">
            <?php
                if($fila_afectada > 0) {
                    echo '<div class="message success"><p>Se ha eliminado correctamente</p></div>';
                } else {
                    echo '<div class="message error"><p>No se ha eliminado correctamente</p></div>';
                }

                header("refresh:2;url=mostrartodo.php");
                $conexion->close();
            ?>
        </div>
    </body>
</html>

