<?php 
	require '../../conexion.php';
	$id_rol=$_POST["id_rol"];
	$rol=$_POST["rol"];
	
	
    
	$sql="UPDATE roles set rol='$rol'
	
	 

				where id_rol='$id_rol'";
	echo $result=mysqli_query($con,$sql);

 ?>