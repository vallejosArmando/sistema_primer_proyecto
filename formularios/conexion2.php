<?php 
	

$host="127.0.0.1";
 $user = "root";
  $password = ''; 
  $database = "sistema_de_reclamos";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");


$estado_reclamo = $_POST["estado_reclamo"];
$fecha=$_POST['fecha'];
$id_sistema_reclamo = $_POST["id_sistema_reclamo"];
$id_usuario_cosaalt = $_POST["id_usuario_cosaalt"];

$f=explode('/',$fecha);
$fechas=$f[0]."-".$f[1]."-".$f[2];




$sql="INSERT INTO reclamos VALUES(null,'$estado_reclamo','$fechas','$id_sistema_reclamo','$id_usuario_cosaalt',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El estado del reclamo es: ".$estado_reclamo;
echo"<br>La fecha del reclamo es: ".$fecha;
echo "<br>El id del sistema es: ".$id_sistema_reclamo;
echo"<br>El id del usuario es: ".$id_usuario_cosaalt;
    echo "<p>Se guardo correctamente</p> <a href='menu2.php'>volver</a>";


}

?>
