<?php 

	require '../../conexion.php';

	$id_persona=$_POST["id_persona"];
	$nom_usuario=$_POST["nom_usuario"];
	$clave=md5($_POST["clave"]);
	
	


	$sql="INSERT INTO usuarios
								VALUES (null,'$id_persona','$nom_usuario','$clave',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>