<?php 

	require '../../conexion.php';

	$ci=$_POST["ci"];
	$nombres=$_POST["nombres"];
	$ap=$_POST["ap"];
	$am=$_POST["am"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$genero=$_POST["genero"];

	


	$sql="INSERT INTO `personas`(`id_persona`, `id_sistema_reclamo`, `ci`, `nombres`, `ap`, `am`, `telefono`, `direccion`,`genero`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`) VALUES (null,1,'$ci','$nombres','$ap','$am','$telefono','$direccion','$genero',now(),now(),1,1)";
	echo $result=mysqli_query($con,$sql);

 ?>