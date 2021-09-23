
<?php 
	require '../../conexion.php';
	$id_usuario_rol=$_POST['id_usuario_rol'];

	$sql="UPDATE usuario_roles SET estado=0 where id_usuario_rol='$id_usuario_rol'";
	echo $result=mysqli_query($con,$sql);
 ?>