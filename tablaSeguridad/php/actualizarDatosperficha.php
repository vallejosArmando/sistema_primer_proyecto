<?php 
	require_once "../../conexion.php";
	

    
	$sql="SELECT *FROM personas WHERE 
	 


				where id_persona='$id_persona'";
	echo $result=mysqli_query($con,$sql);

 ?>