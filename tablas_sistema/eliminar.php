<?php

header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['id_sistema_reclamo']) {
		
		require_once '../conexion.php';
		$id_sistema_reclamo = $_POST['id_sistema_reclamo'];

		$buscar=" SELECT * FROM areas where id_sistema_reclamo='$id_sistema_reclamo' ";
		$negar=mysqli_query($con,$buscar);
		$m=mysqli_fetch_array($negar);
		if(isset ($m)){
			$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
		}else  {


$id_sistema_reclamo=$_POST["id_sistema_reclamo"];


$sql="UPDATE sistema_reclamos SET estado=0  WHERE id_sistema_reclamo='$id_sistema_reclamo'";

$ejec=mysqli_query($con,$sql);

	
if ($ejec) {
  $response['status']  = 'success';
  $response['message'] = 'Producto eliminado correctamente...';
} else {
  $response['status']  = 'error';
  $response['message'] = 'No se puede eliminar el producto ...';
}


echo json_encode($response);}}



?>
