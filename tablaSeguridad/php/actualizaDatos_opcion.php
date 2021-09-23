<?php 

require '../../conexion.php';
$id_opcion=$_POST["id_opcion"];

$id_grupo=$_POST["id_grupo"];
$nombre=$_POST["nombre"];
$op_url=$_POST["op_url"];
$mostrar=$_POST["mostrar"];

$orden=$_POST["orden"];
 
$sql="UPDATE opciones  SET 
id_grupo='$id_grupo',
nombre='$nombre',
op_url='$op_url',
mostrar='$mostrar',

orden='$orden' 
WHERE id_opcion='$id_opcion'";
echo $result=mysqli_query($con,$sql);

 
