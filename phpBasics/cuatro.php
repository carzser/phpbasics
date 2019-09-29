<?php
include("conexion.php");

$id = $_GET['id'];

$solicitud = "SELECT *
              FROM datos
              WHERE ID = $id  ";

$resultado = mysqli_query($conexion,$solicitud);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="cinco.php">
    <?php
        while($fila = mysqli_fetch_array($resultado)){
            echo "Nombre: <input type='text' name='nombre' value='".$fila['Nombre']."'> <br>";
            echo "Apellido: <input type='text' name='apellido' value='".$fila['Apellido']."'> <br>";
            echo "Edad: <input type='text' name='edad' value='".$fila['Edad']."'> <br>";
            echo "Celular: <input type='text' name='celular' value='".$fila['Celular']."'> <br>";
            echo "<input type='hidden' name='id' value='".$id."'<br>";
        }

    ?>
    <input type="submit" name="Enviar" value="cambiar">


    </form>
</body>
</html>
