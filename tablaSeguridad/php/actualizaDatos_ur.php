<?php 
	require '../../conexion.php';
	$id_usuario_rol=$_POST["id_usuario_rol"];
	$id_usuario=$_POST["id_usuario"];
	$id_rol=$_POST["id_rol"];
	
    
	$sql="UPDATE usuario_roles set id_usuario='$id_usuario',
	 id_rol='$id_rol'
	 

				where id_usuario_rol='$id_usuario_rol'";
	echo $result=mysqli_query($con,$sql);

 ?>