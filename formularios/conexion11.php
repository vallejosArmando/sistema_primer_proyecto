
<?php 

$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "eric_herlan";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$pais = $_POST["pais"];
$departamento=$_POST["departamento"];
$barrio=$_POST["barrio"];
$calle=$_POST["calle"];
$entre_que_calles=$_POST["entre_que_calles"];
$numero_de_casa=$_POST["numero_de_casa"];
$comunidad=$_POST["comunidad"];
$id_empleado=$_POST["id_empleado"];

$sql="INSERT INTO direccion VALUES(null,'$pais','$departamento','$barrio','$calle','$entre_que_calles','$numero_de_casa','$comunidad','$id_empleado',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El pais   es: ".$pais;
echo "<br>El departamento  es: ".$departamento;
echo"<br>El barrio del empleado es: ".$barrio;
echo"<br>La calle  es: ".$calle;
echo"<br>Entre que calles  es: ".$entre_que_calles;
echo"<br>El numero de casa del empleado es: ".$numero_de_casa;
echo"<br>La comunidad del empleado es: ".$comunidad;

echo"<br>El id  del empleado es: ".$id_empleado;

    echo "<p>Se guardo correctamente</p> <a href='direccion.php'>volver</a>";


}

?>