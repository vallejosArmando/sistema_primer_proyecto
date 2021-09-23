<?php 
require '../conexion.php';

$id_tipo_empleado=$_POST["id_tipo_empleado"];
$id_area=$_POST["id_area"];
$nombres=$_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$ci=$_POST["ci"];
$tel_fijo=$_POST["tel_fijo"];
$tel_cel=$_POST["tel_cel"];
$direccion=$_POST["direccion"];

$sql="INSERT INTO `empleados` (`id_empleado`, `id_tipo_empleado`, `id_area`, `id_sistema_reclamo`, `nombres`, `ap`, `am`, `ci`, `tel_fijo`, `tel_cel`, `direccion`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES (NULL, '$id_tipo_empleado', '$id_area', 1, '$nombres', '$ap', '$am', '$ci', '$tel_fijo', '$tel_cel', '$direccion',now(), now(), 1, 1)";

$ejecutar=mysqli_query($con,$sql);
if (!$ejecutar) {
    echo"Hubo Algun Error";
} else {
    echo "<br>El tipo empleado es: ".$id_tipo_empleado;
    echo "<br>El area es: ".$id_area;

    echo "<br>El nombre del empleado es: ".$nombres;
echo "<br>El apellido paterno es: ".$ap;
echo"<br>El apllido matero es: ".$am;
echo"<br>El ci es: ".$ci;
echo "<br>El telefono fijo es : ".$tel_fijo;
echo "<br>El celular del empleado es: ".$tel_cel;
echo "<br>La direccion del empleado es: ".$direccion;



    echo "<p>Se guardo correctamente</p> <a href='empleados.php'>volver</a>";


}
?>