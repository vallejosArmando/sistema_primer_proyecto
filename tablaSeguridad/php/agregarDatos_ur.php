<?php 

	require '../../conexion.php';

	$id_usuario=$_POST["id_usuario"];
	$id_rol=$_POST["id_rol"];
	
	


	$sql="INSERT INTO usuario_roles
								VALUES (null,'$id_usuario','$id_rol',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>