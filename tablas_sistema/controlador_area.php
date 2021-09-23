<?php
	require_once "conexion.php";
	$conexion=conexion();
//if(isset($_POST['nombre'])){
    //$nombre = $_POST["nombre"];
    //$descripcion = $_POST["descripcion"];
    
   // $sql="INSERT INTO areas VALUES(null,1,'$nombre','$descripcion',now(),now(),1,1)";
    
   // $ejec=mysqli_query($conexion,$sql);
 
	if(isset($_REQUEST['id_area'])){
        $id_area = $_REQUEST['id_area'];
        $nombre      = $_REQUEST['nombre'];
        $descripcion	 = $_REQUEST['descripcion'];
        
        $update = ("UPDATE areas 
            SET 
            nombre  ='" .$nombre. "',
            descripcion  ='" .$descripcion. "'
        
        WHERE id_area='" .$id_area. "'
        ");
        $result_update = mysqli_query($conexion, $update);
        echo "<script type='text/javascript'>
        window.location='tabla_areas.php';
    </script>";
	if(isset($_POST['id_area'])){
        $id_area = $_POST['id_area'];

		$buscar=" SELECT * FROM jefes_areas where id_area='$id_area' ";
		$negar=mysqli_query($conexion,$buscar);
		$m=mysqli_fetch_array($negar);
		if(isset ($m)){
			$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
		}else  {
	
			$id_area = $_POST['id_area'];
			$query ="UPDATE areas SET estado=0  WHERE id_area='$id_area'";
			$stmt=mysqli_query($conexion,$query);

			
			if ($stmt) {
          
				$response['status']  = 'success';
				$response['message'] = 'Producto eliminado correctamente...';
                
			} else {
				$response['status']  = 'error';
				$response['message'] = 'No se puede eliminar el producto ...';
            }
     
     
         }
       }
    
    }


?>