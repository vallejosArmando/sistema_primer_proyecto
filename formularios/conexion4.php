<?php 

	

$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "sistema_de_reclamos";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

$barrio = $_POST["barrio"];
$calle_avenida = $_POST["calle_avenida"];
$entre_que_calles = $_POST["entre_que_calles"];
$referencias = $_POST["referencias"];
$otro_recurrente = $_POST["otro_recurrente"];
$telefono_del_recurrente = $_POST["telefono_del_recurrente"];
$tipo_de_calzada = $_POST["tipo_de_calzada"];
$numero_de_caza = $_POST["numero_de_caza"];
$id_reclamo = $_POST["id_reclamo"];

$sql="INSERT INTO descripcion_reclamos VALUES(null,'$barrio','$calle_avenida','$entre_que_calles','$referencias','$otro_recurrente','$telefono_del_recurrente','$tipo_de_calzada','$numero_de_caza','$id_reclamo',now(),now(),1,1)";

$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El nombre del barrio es: ".$barrio;
echo"<br>El nombre de la calle o abenida es: ".$calle_avenida;
echo"<br>Entre que calles es: ".$entre_que_calles;
echo "<br>Referencias: ".$referencias;
echo"<br>Otro recurrente: ".$otro_recurrente;
echo"<br>El telefono del recurrente es:".$telefono_del_recurrente;
echo"<br>El tipo de calzada es: ".$tipo_de_calzada;
echo"<br>El numero de caza es:".$numero_de_caza;
echo"<br>El id del reclamo es: ".$id_reclamo;
    echo "<p>Se guardo correctamente</p> <a href='menu2.php'>volver</a>";


}


?>