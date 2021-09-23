<?php 
	require '../../conexion.php';
	$id_grupo=$_POST["id_grupo"];
	$grupo=$_POST["grupo"];
	$icono=$_POST["icono"];

	
	
    
	$sql="UPDATE grupos set id_grupo='$id_grupo', grupo='$grupo',icono='$icono'
				where id_grupo='$id_grupo'";
	echo $result=mysqli_query($con,$sql);

 ?>