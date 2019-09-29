<?php
/*$user = "Carlos";
$password = "123";


if($_POST['usuario'] == $user  && $_POST['password'] == $password){
    session_start();

    $_SESSION['usuario'] = "Carlos Andres Serrano Alvarez";
    $_SESSION['pais'] = "Colombia";
    header('location: dos.php');
}else{
    echo "Su nombre de usuario o contraseña es incorrecto. <br>";
    echo "<a href='index.php'>Intentar nuevamente</a>";


}*/

/*$miPais = $_POST['pais'];

setcookie("estado",$miPais, time() + 3600);

echo $_COOKIE['estado'];*/
/*
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$solicitud = fopen("texto.txt","a")or die("No se pudo abrir");
fwrite($solicitud,"ASUNTO: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$asunto);
fwrite($solicitud,"\r\n");
fwrite($solicitud,"MENSAJE: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$mensaje);

echo "La operacion fue correcta";

fclose($solicitud);*/

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];


$solicitud = "INSERT INTO datos(Nombre, Apellido, Edad, Celular)
                VALUES('$nombre','$apellido','$edad','$celular')";

$resultado = mysqli_query($conexion,$solicitud);
header("location: index.php");



?>