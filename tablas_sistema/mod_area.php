if (isset())
<?php
include('../conexion.php');
$id_area = $_REQUEST['id_area'];
$nombre      = $_REQUEST['nombre'];
$descripcion	 = $_REQUEST['descripcion'];

$update = ("UPDATE areas 
	SET 
	nombre  ='" .$nombre. "',
	descripcion  ='" .$descripcion. "'

WHERE id_area='" .$id_area. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='tabla_areas.php';
    </script>";

?>