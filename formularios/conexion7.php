<?php 

	

require '../conexion.php';

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sql="INSERT INTO areas VALUES(null,1,'$nombre','$descripcion',now(),now(),1,1)";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El nombre del area  es: ".$nombre;
echo "<br>La descripcion es: ".$descripcion;
    echo "<p>Se guardo correctamente</p> <a href='areas.php'>volver</a>";


}


?>