<?php 
	require_once "../../conexion.php";
	$id_acceso=$_POST["id_acceso"];
	$id_grupo=$_POST["id_grupo"];
	$id_opcion=$_POST["id_opcion"];
	$id_rol=$_POST["id_rol"];
	$permisos=$_POST["permisos"];
    
	$sql="UPDATE accesos set id_grupo='$id_grupo',id_opcion='$id_opcion',
	 id_rol='$id_rol',permisos='$permisos'
	 

				where id_acceso='$id_acceso'";
	echo $result=mysqli_query($con,$sql);

 ?>