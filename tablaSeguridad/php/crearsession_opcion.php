<?php 
	session_start();

	$idu=$_POST['valor_usuario'];

	$_SESSION['consulta_usuario']=$idu;

	echo $idu;

 ?>