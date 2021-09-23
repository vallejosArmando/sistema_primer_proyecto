<?php 
$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "sistema_de_reclamos";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefonos = $_POST["telefonos"];
$id_sistema_reclamo = $_POST["id_sistema_reclamo"];

$sql="INSERT INTO plomeros VALUES(null,'$nombres','$apellidos','$telefonos','$id_sistema_reclamo',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El nombre del plomero es: ".$nombres;
echo"<br>Los apellidos son: ".$apellidos;
echo"<br>El telefono es: ".$telefonos;
echo "<br>El id del sistema de reclamos es: ".$id_sistema_reclamo;

    echo "<p>Se guardo correctamente</p> <a href='menu2.php'>volver</a>";


}
?>