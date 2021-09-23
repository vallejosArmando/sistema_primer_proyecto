<?php 
	require '../../conexion.php';
	$id_usuario=$_POST["id_usuario"];
	$id_persona=$_POST["id_persona"];
	$nom_usuario=$_POST["nom_usuario"];
	$clave=md5( $_POST["clave"]);
	
    
	$sql="SELECT *FROM personas WHERE id_persona='$id_persona";
	
	 	echo $result=mysqli_query($con,$sql);

 ?>