<?php 

require '../conexion.php';

$nombre = $_POST["nombre"];
$descripcion=$_POST["descripcion"];

$sql="INSERT INTO tipo_empleados VALUES(null,'$nombre','$descripcion',now(),now(),1,1)";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El nombre de la funcion es: ".$nombre;
echo "<br>El nombre del plomero es: ".$descripcion;

    echo "<p>Se guardo correctamente</p> <a href='tipo_empleados.php'>volver</a>";


}

?>