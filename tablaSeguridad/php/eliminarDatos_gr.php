
<?php 
	require '../../conexion.php';
	$id_grupo=$_POST['id_grupo'];

	$sql="UPDATE grupos SET gr_estado=0  where id_grupo='$id_grupo'";
	echo $result=mysqli_query($con,$sql);
 ?>