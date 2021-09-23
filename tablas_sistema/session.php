<?php 
	session_start();

	$idem=$_POST['valor'];

	$_SESSION['consulta']=$idem;

	echo $idem;

 ?>