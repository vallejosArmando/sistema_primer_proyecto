<?php
require_once '../conexion.php';
$id_jefe_area=$_REQUEST["id_jefe_area"];

$id_area = $_POST["id_area"];
$nombres = $_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$ci=$_POST["ci"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$fec_inicio=$_POST["fec_inicio"];
$fec_fin=$_POST["fec_fin"];



$sql="UPDATE `jefes_areas` SET `id_area`='$id_area',`nombres`='$nombres',`ap`='$ap',`am`='$am',`ci`='$ci',`telefono`='$telefono',`correo`='$correo',`fec_inicio`='$fec_inicio',`fec_fin`='$fec_fin' WHERE id_jefe_area=$id_jefe_area";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
  header("location:tabla_jefe_areas.php");

}

?>
