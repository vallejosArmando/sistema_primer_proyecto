<?php 


$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "eric_herlan";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$nombre = $_POST["nombre"];
$ap_paterno = $_POST["ap_paterno"];
$ap_materno = $_POST["ap_materno"];
$telefono = $_POST["telefono"];
$correo_electronico = $_POST["correo_electronico"];
$codigo_usuario = $_POST["codigo_usuario"];
$direccion = $_POST["direccion"];
$id_sistema_reclamo = $_POST["id_sistema_reclamo"];

$sql="INSERT INTO usuarios_cosaalt VALUES(null,'$nombre','$ap_paterno','$ap_materno','$telefono','$correo_electronico','$codigo_usuario ','$direccion','$id_sistema_reclamo ',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El nombre del usuario es: ".$nombre;
echo"<br>El apellido paterno  es: ".$ap_paterno;
echo"<br>El apellido materno  es: ".$ap_materno;
echo "<br>El telefono es: ".$telefono;
echo"<br>El correo electronico es: ".$correo_electronico;
echo"<br>El codigo del usuario es:".$codigo_usuario;
echo"<br>La direccion del usuario es: ".$direccion;
echo"<br>El id del sistema de reclamo es:".$id_sistema_reclamo;
    echo "<p>Se guardo correctamente</p> <a href='usuarios_cosaalt.php'>volver</a>";


}
?>