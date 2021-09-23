<?php 

$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "sistema_de_reclamos";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$hora_entrada = $_POST["hora_entrada"];
$hora_salida = $_POST["hora_salida"];
$dias = $_POST["dias"];
$id_plomero=$_POST["id_plomero"];

$sql="INSERT INTO horario_plomeros VALUES(null,'$hora_entrada','$hora_salida','$dias','$id_plomero',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>La hora de entrada es: ".$hora_entrada;
echo"<br>La hora de salida es: ".$hora_salida;
echo"<br>Los dias de trabajo son: ".$dias;
echo"<br>El id del plomero es: ".$id_plomero;

    echo "<p>Se guardo correctamente</p> <a href='menu2.php'>volver</a>";


}

?>