
<?php 
	require_once "../../conexion.php";
	
	$id_usuario=$_POST['id_usuario'];

	$sql="UPDATE usuarios SET estado=0 WHERE id_usuario=$id_usuario";
	
	echo $result=mysqli_query($con,$sql);
 ?>