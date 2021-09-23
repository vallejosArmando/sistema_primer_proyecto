<?php
require_once '../conexion.php';
$id_asignar=$_REQUEST["id_asignar"];
$id_conf=$_POST["id_conf"];
$id_empleado=$_POST["id_empleado"];
$descripcion=$_POST["descripcion"];
$fec_inicio=$_POST["fec_inicio"];
$fec_fin=$_POST["fec_fin"];



$buscar="UPDATE `asignaciones` SET `id_asignar`='$id_asignar',`id_conf`='$id_conf',`id_empleado`='$id_empleado',`descripcion`='$descripcion',`fec_inicio`='$fec_inicio',`fec_fin`='$fec_fin' WHERE id_asignar='$id_asignar' ";
$negar=mysqli_query($con,$buscar);

if (!$negar) {
    echo"Hubo Algun Error";
} else {
    echo "eliminado correctamente";
  header("location:tabla_asignacion.php");

}
