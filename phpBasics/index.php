<?php
/*
include("conexion.php");

$solicitud = "CREATE TABLE datos (
                ID int NOT NULL AUTO_INCREMENT,
                Nombre varchar(15),
                Apellido varchar(15),
                Edad int,
                Celular int,
                PRIMARY KEY (ID))";

$resultado = mysqli_query($conexion, $solicitud);
*/
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
    <form method="post" action="uno.php">
    Nombre:  <input type="text" name="nombre"> <br>
    Apellido:  <input type="text" name="apellido"> <br>
    Edad:  <input type="text" name="edad"> <br>
    Celular:  <input type="text" name="celular"> <br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>
