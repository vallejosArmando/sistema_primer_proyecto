<?php 
	require '../../conexion.php';
	$id_usuario=$_POST["id_usuario"];
	$id_persona=$_POST["id_persona"];
	$nom_usuario=$_POST["nom_usuario"];
	$clave=md5( $_POST["clave"]);
	
    
	$sql="UPDATE usuarios set id_persona='$id_persona',
	 nom_usuario='$nom_usuario',
	  clave='$clave'
	 

				where id_usuario='$id_usuario'";
	echo $result=mysqli_query($con,$sql);

 ?>