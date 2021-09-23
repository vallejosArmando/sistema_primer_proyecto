<?php 

require_once "conexion.php";
$conexion=conexion();
$id_opcion=$_POST['id_opcion'];

$sql="UPDATE opciones SET op_estado=0 WHERE id_opcion=$id_opcion";
echo $result=mysqli_query($conexion,$sql);

?>