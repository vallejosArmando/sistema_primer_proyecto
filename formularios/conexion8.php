<?php 


require '../conexion.php';

$id_area = $_POST["id_area"];
$nombres = $_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$ci=$_POST["ci"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$fec_inicio=$_POST["fec_inicio"];
$fec_fin=$_POST["fec_fin"];

$sql="INSERT INTO jefes_areas VALUES(null,'$id_area','$nombres','$ap','$am','$ci','$telefono','$correo','$fec_inicio','$fec_fin',now(),now(),1,1)";

$ejec=mysqli_query($con,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo"<br>El id del area es: ".$id_area;

    echo "<br>El nombre del jefe es: ".$nombres;
echo "<br>El apellido paterno es: ".$ap;
echo "<br>El apellido materno es: ".$am;
echo "<br>El telefono es: ".$telefono;
echo "<br>El correo  es: ".$correo;
echo"<br>la fecha inicio es: ".$fec_inicio;

echo"<br>La fecha fin  es: ".$fec_fin;

    echo "<p>Se guardo correctamente</p> <a href='jefe_areas.php'>volver</a>";


}


?>