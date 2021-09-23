<?php 

	require '../../conexion.php';

	$rol=$_POST["rol"];
	
	
	


	$sql="INSERT INTO roles
								VALUES (null,'$rol',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>