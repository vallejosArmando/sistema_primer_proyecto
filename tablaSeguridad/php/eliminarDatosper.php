
<?php 
	require '../../conexion.php';
	$id_persona=$_POST['id_persona'];

	$sql="UPDATE personas SET estado=0 WHERE id_persona=$id_persona";
	echo $result=mysqli_query($con,$sql);
 ?>