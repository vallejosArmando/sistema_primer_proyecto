<?php 

	require_once "../../conexion.php";
    $id_grupo=$_POST["id_grupo"];
	$id_opcion=$_POST["id_opcion"];
	$id_rol=$_POST["id_rol"];
	$permisos=$_POST["permisos"];
	
	


	$sql="INSERT INTO `accesos`(`id_acceso`, `id_grupo`, `id_opcion`, `id_rol`, `permisos`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`)  VALUES (null,'$id_grupo','$id_opcion','$id_rol','$permisos',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>