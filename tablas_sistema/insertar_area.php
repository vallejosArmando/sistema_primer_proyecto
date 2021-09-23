
<?php
include '../conexion.php';
$nombre      = $_REQUEST['nombre'];
$descripcion 	 = $_REQUEST['descripcion'];


$QueryInsert = ("INSERT INTO areas(
    nombre,
    descripcion
)
VALUES (
    '".$nombre. "',
    '".$descripcion. "'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:tabla_areas.php");
?>