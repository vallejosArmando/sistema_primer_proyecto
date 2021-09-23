<?php
require_once '../conexion.php';

$nombre = $_POST["nombre"];
$nombre_creador = $_POST["nombre_creador"];


$logo=$_FILES["logo"]["name"];
$ruta=$_FILES["logo"]["tmp_name"];
$destino="../fotos/".$logo;
copy($ruta,$destino);

$sql="INSERT INTO sistema_reclamos VALUES(null,'$nombre','$nombre_creador','$destino',now(),now(),1,1)";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
  header("location:mostrar.php");

}

?>
