<?php
require_once '../conexion.php';
$id_empleado=$_REQUEST["id_empleado"];
$id_tipo_empleado=$_POST["id_tipo_empleado"];
$id_area=$_POST["id_area"];
$nombres=$_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$ci=$_POST["ci"];
$tel_fijo=$_POST["tel_fijo"];
$tel_cel=$_POST["tel_cel"];
$direccion=$_POST["direccion"];


$buscar="UPDATE `empleados` SET `id_tipo_empleado`='$id_tipo_empleado',`id_area`='$id_area',`nombres`='$nombres',`ap`='$ap',`am`='$am',`ci`='$ci',`tel_fijo`='$tel_fijo',`tel_cel`='$tel_cel',`direccion`='$direccion' WHERE id_empleado=$id_empleado ";
$negar=mysqli_query($con,$buscar);

if (!$negar) {
    echo"Hubo Algun Error";
} else {
    echo "eliminado correctamente";
  header("location:tabla_empleados.php");

}
