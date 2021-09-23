

<?php 

require '../conexion.php';

$id_conf = $_POST["id_conf"];
$id_empleado=$_POST["id_empleado"];
$descripcion=$_POST["descripcion"];
$fec_inicio=$_POST["fec_inicio"];
$fec_fin=$_POST["fec_fin"];


 

$sql="INSERT INTO asignaciones VALUES(null,'$id_conf','$id_empleado','$descripcion','$fec_inicio','$fec_fin',now(),now(),1,1)";


$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
  //  $r="SELECT e,* t,* from empleados e inner join tipo_empleados t on e.id_tipo_empelado=t.id_tipo_empleado where e.estado=1 and estad=1";
    //
    echo " <br><a href='asignaciones.php'>Volver</a>'";

 echo '.. <link rel="stylesheet" href="info.css">
 <header><h1>DATOS GUARDADOS CON EXITO</h1></header>
 <
 <table border="2" class="tabla"> <tr><td>
<p> Reclamo : '.$id_conf.'</p>
<p>Empleado asignado :  '.$id_empleado.' </p>
<p>Descripcion :  '.$descripcion.' </p>
<p>Fecha de inicio : '.$fec_inicio.' </p>
<p>Fecha fin:  '.$fec_fin.'</p>
</tr>

</table>';


}

?>

