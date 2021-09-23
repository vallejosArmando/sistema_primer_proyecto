<?php
require '../conexion.php';

	$genero=$_POST["genero"];

if ($genero=="F"){
		$menulis="SELECT * from personas where genero='$genero'  AND estado=1";
		$menulist=mysqli_query($con,$menulis);
		$mendata=mysqli_fetch_assoc($menulist);
		$F=$mendata['genero'];
   
	
}else if($genero=="M"){
	$menulis="SELECT * from personas where genero='$genero'  AND estado=1";
		$menulist=mysqli_query($con,$menulis);
		$mendata=mysqli_fetch_assoc($menulist);
		$M=$mendata['genero'];

            }
            else if($genero=="todos"){
                $menulis="SELECT * from personas where estado=1 ";
                $menulist=mysqli_query($con,$menulis);
                $mendata=mysqli_fetch_assoc($menulist);
                $T=$mendata['genero'];

            }

		


