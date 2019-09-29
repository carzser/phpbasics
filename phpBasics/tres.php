<?php
/*session_start();
session_unset();
session_destroy();
header('location: index.php');*/

include("conexion.php");

$id = $_GET['id'];

$solicitud = "DELETE FROM datos
              WHERE ID = $id";

$resultado = mysqli_query($conexion,$solicitud);
header("location: dos.php");


?>