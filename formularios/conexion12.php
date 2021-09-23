<?php 

$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "eric_herlan";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$telefono = $_POST["telefono"];
$id_empleado = $_POST["id_empleado"];

$sql="INSERT INTO telefonos VALUES(null,'$telefono','$id_empleado',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El telefono  es: ".$telefono;

echo"<br>El id del empleado es: ".$id_empleado;

    echo "<p>Se guardo correctamente</p> <a href='telefono.php'>volver</a>";


}

?>
