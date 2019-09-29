<?php
$user = "Carlos";
$password = "123";


if($_POST['usuario'] == $user  && $_POST['password'] == $password){
    session_start();

    $_SESSION['usuario'] = "Carlos Andres Serrano Alvarez";
    $_SESSION['pais'] = "Colombia";
    header('location: dos.php');
}else{
    echo "Su nombre de usuario o contraseña es incorrecto. <br>";
    echo "<a href='index.php'>Intentar nuevamente</a>";


}


?>