





<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['id_area']) {
		
		require_once '../conexion.php';
		$id_area = $_POST['id_area'];

		$buscar=" SELECT * FROM jefes_areas where id_area='$id_area' ";
		$negar=mysqli_query($con,$buscar);
		$m=mysqli_fetch_array($negar);
		if(isset ($m)){
			$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
		}else  {
	
			$id_area = $_POST['id_area'];
			$query ="UPDATE areas SET estado=0  WHERE id_area='$id_area'";
			$stmt=mysqli_query($con,$query);

			
			if ($stmt) {
				$response['status']  = 'success';
				$response['message'] = 'Producto eliminado correctamente...';
			} else {
				$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
			}
			echo json_encode($response);}}