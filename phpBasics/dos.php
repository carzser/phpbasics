<?php
/*session_start();

echo "Bienvenido ".$_SESSION['usuario']."<br>";
echo "Su pais es ".$_SESSION['pais']."<br>";

echo "<a href='tres.php'>Cerrar sesion</a>";*/
/*
$solicitud = fopen("texto.txt","r")or die("No se pudo abrir");
while(!feof($solicitud)){
    $leer = fgets($solicitud);
    $ver = nl2br($leer);
    echo $ver;
}*/

include("conexion.php");

$solicitud = "SELECT *
              FROM datos ORDER BY Edad desc";

$resultado = mysqli_query($conexion, $solicitud);

echo "<table border='1'>
       <tr>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>EDAD</td>
            <td>CELULAR</td>
            <td colspan='2'>ACCIONES</td>
       </tr> 
";

while($fila = mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>".$fila['Nombre']."</td>"."<td>".$fila['Apellido']."</td>";
    echo "<td>".$fila['Edad']."</td>";
    echo "<td>".$fila['Celular']."</td>";
    echo "<td><a href='tres.php?id=". $fila['ID']."'>Eliminar</a></td>";
    echo "<td><a href='cuatro.php?id=". $fila['ID']."'>Modificar</a></td>";
    echo "</tr>";
}

echo "</table>";


?>