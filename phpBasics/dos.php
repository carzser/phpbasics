<?php
session_start();

echo "Bienvenido ".$_SESSION['usuario']."<br>";
echo "Su pais es ".$_SESSION['pais'];
?>