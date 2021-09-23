<?php
require_once '../conexion.php';
$id_sistema_reclamo=$_REQUEST["id_sistema_reclamo"];
$nombre = $_POST["nombre"];
$nombre_creador = $_POST["nombre_creador"];


$logo=$_FILES["logo"]["name"];
$ruta=$_FILES["logo"]["tmp_name"];
$destino="../fotos/".$logo;
copy($ruta,$destino);

$sql="UPDATE sistema_reclamos SET nombre='$nombre', nombre_creador='$nombre_creador',logo='$destino' WHERE id_sistema_reclamo='$id_sistema_reclamo'";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
  header("location:mostrar.php");

}

?>
