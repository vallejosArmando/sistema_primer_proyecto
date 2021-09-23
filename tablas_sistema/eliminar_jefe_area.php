<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();

		require_once '../conexion.php';
$id_jefe_area=$_REQUEST["id_jefe_area"];

$sql="UPDATE `jefes_areas` SET `estado`= 0 WHERE id_jefe_area=$id_jefe_area";

$ejec=mysqli_query($con,$sql);
if ($ejec) {
  $response['status']  = 'success';
  $response['message'] = 'Producto eliminado correctamente...';
} else {
  $response['status']  = 'error';
  $response['message'] = 'No se puede eliminar el producto ...';
}
echo json_encode($response);


?>

