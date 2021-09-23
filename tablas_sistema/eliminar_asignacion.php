
<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
		
		require_once '../conexion.php';

	
	
			$id_asignar= $_POST['id_asignar'];
			$query = " UPDATE asignaciones set estado=0 where id_asignar='$id_asignar'";
			$stmt=mysqli_query($con,$query);

			
			if ($stmt) {
				$response['status']  = 'success';
				$response['message'] = 'Producto eliminado correctamente...';
			} else {
				$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
			}
			echo json_encode($response);

			