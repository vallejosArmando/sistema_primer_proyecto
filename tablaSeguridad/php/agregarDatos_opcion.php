
<?php 

include_once '../../conexion.php';

$id_grupo=$_POST["id_grupo"];
$nombre=$_POST["nombre"];
$op_url=$_POST["op_url"];
$mostrar=$_POST["mostrar"];
$orden=$_POST["orden"];





$sql="INSERT INTO opciones
							VALUES (null,'$id_grupo','$nombre','$op_url','$mostrar',$orden,now(),now(),1,1)";
echo $result=mysqli_query($con,$sql);

?>