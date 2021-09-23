
<?php
	
	header('Content-type: application/json; charset=UTF-8');
	
	$response = array();
	
	if ($_POST['id_empleado']) {
		
		require_once '../conexion.php';
		$id_empleado = $_POST['id_empleado'];

		$buscar=" SELECT * FROM asignaciones where id_empleado='$id_empleado' ";
		$negar=mysqli_query($con,$buscar);
		$m=mysqli_fetch_array($negar);
		if(isset ($m)){
			$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
		}else  {
	
			$id_empleado = $_POST['id_empleado'];
			$query = " UPDATE empleados set estado=0 where id_empleado='$id_empleado'";
			$stmt=mysqli_query($con,$query);

			
			if ($stmt) {
				$response['status']  = 'success';
				$response['message'] = 'Producto eliminado correctamente...';
			} else {
				$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
			}
			echo json_encode($response);}}

			