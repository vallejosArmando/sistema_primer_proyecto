
<?php 
	require_once "../../conexion.php";
	
	$id_acceso=$_POST['id_acceso'];

	$sql="UPDATE   accesos SET estado=0 where id_acceso='$id_acceso'";
	echo $result=mysqli_query($con,$sql);
 ?>