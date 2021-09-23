<?php 
	require_once "../../conexion.php";
	$id_persona=$_POST["id_persona"];
	$ci=$_POST["ci"];
	$nombres=$_POST["nombres"];
	$ap=$_POST["ap"];
	$am=$_POST["am"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$genero=$_POST["genero"];

    
	$sql="UPDATE personas set 
	 ci='$ci',
	  nombres='$nombres',
	   ap='$ap',
	    am='$am',
		 telefono='$telefono',
		  direccion='$direccion',
		genero='$genero'


				where id_persona='$id_persona'";
	echo $result=mysqli_query($con,$sql);

 ?>