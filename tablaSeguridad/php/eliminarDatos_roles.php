
<?php 
	require '../../conexion.php';
	$id_rol=$_POST['id_rol'];

	$sql=" UPDATE roles SET estado=0   where id_rol='$id_rol'";
	echo $result=mysqli_query($con,$sql);
 ?>