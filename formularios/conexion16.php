

<?php 

require '../conexion.php';

$nombres = $_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$codigo_usuario=$_POST["codigo_usuario"];
$barrio=$_POST["barrio"];
$calle_avenida=$_POST["calle_avenida"];
$entre_que_calles=$_POST["entre_que_calles"];
$numero_de_casa=$_POST["numero_de_casa"];
$referencias=$_POST["referencias"];
$descripcion_del_reclamo=$_POST["descripcion_del_reclamo"];



$map=$_POST["map"];
$otro_recurrente=$_POST["otro_recurrente"];
$telefono_del_recurrente=$_POST["telefono_del_recurrente"];
$tipo_de_calzada=$_POST["tipo_de_calzada"];

 

$sql="INSERT INTO reclamos VALUES(null,'$nombres','$ap','$am','$telefono','$correo','$codigo_usuario','$barrio','$calle_avenida','$entre_que_calles','$numero_de_casa','$referencias','$descripcion_del_reclamo','$map','$otro_recurrente','$telefono_del_recurrente','$tipo_de_calzada',now(),now(),1,1)";


$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    
    echo " <br><a href='reclamos.php'>Volver</a>'";

 echo '.. <link rel="stylesheet" href="info.css">
 <header><h1>DATOS GUARDADOS CON EXITO</h1></header>
 <
 <table border="2" class="tabla"> <tr><td>
<p> Nombre : '.$nombres.'</p>
<p>Apellido paterno :  '.$ap.' </p>
<p>Apellido materno :  '.$am.' </p>
<p>Telefono : '.$telefono.' </p>
<p>Correo :  '.$correo.'</p>
<p>Codigo del usuario : '.$codigo_usuario.'</p>
<p>Barrio : '.$barrio.'</p>
<p>Calle o avenida : '.$calle_avenida.'</p>
<p>Entre que calles : '.$entre_que_calles.'</p>
<p>Numero de casa : '.$numero_de_casa.'</p>
</td><td>
<p>Referencias : '.$referencias.'</p>
<p>Descripcion del reclamo : '.$descripcion_del_reclamo.'</p>
<p>Mapa : '.$map.'</p>
<p>Otro recurrente : '.$otro_recurrente.'</p>
<p>Telefono del recurrente : '.$telefono_del_recurrente.'</p>
<p>Tipo de calzada : '.$tipo_de_calzada.'</p>
</td>
</tr>

</table>';


}

?>


