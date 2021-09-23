<?php 

	
require '../../conexion.php';

	$grupo=$_POST["grupo"];
	$icono=$_POST["icono"];
	$sql="INSERT INTO grupos
								VALUES (null,'$grupo','$icono',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>