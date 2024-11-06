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
            
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $email = $_POST['email'];

            // if(!empty($_POST['nombre'])){
            //     $sql = "UPDATE Alumnos SET nombre = '$nombre' WHERE id = '$id'";
            //     $resultado = $conexion->query($sql);
            // }

            // if(!empty($_POST['apellido'])){
            //     $sql = "UPDATE Alumnos SET apellido = '$apellido' WHERE id = '$id'";
            //     $resultado = $conexion->query($sql);
            // }

            // if(!empty($_POST['fecha_nacimiento'])){
            //     $sql = "UPDATE Alumnos SET fecha_nacimiento = '$fecha_nacimiento' WHERE id = '$id'";
            //     $resultado = $conexion->query($sql);
            // }

            // if(!empty($_POST['email'])){
            //     $sql = "UPDATE Alumnos SET email = '$email' WHERE id = '$id'";
            //     $resultado = $conexion->query($sql);
            // }

            if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['fecha_nacimiento']) && !empty($_POST['email']))
            {

                $sql = "UPDATE Alumnos SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento = '$fecha_nacimiento', email = '$email' WHERE id = '$id';";

                $resultado = $conexion->query($sql);
                $fila_afectada = $conexion->affected_rows;

                echo '<div class="container">';

                    if($fila_afectada > 0) {
                        echo '<div class="message success"><p>Se ha modificado correctamente</p></div>';
                    }
                    
                echo '</div>';

                header("Refresh: 2; url=mostrartodo.php");
                $conexion->close();

            }
            else
            {
                echo '<div class="message error"><p>No se ha modificado correctamente</p></div>';

                header("Refresh: 2; url=mostrartodo.php");
            }

        ?>
    </body>
</html>

