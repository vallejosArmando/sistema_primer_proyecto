<!DOCTYPE html>
<html >
  <link rel="stylesheet" href="foto.css">
<?php require_once "../head.php" ;?>
<body >
<?php require_once "menu.php" ;?>

<br>
<br>
<div class="foto" >

<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="70" height="70"   >
    </div>
<center>

<div class="container"> 

<div class="row" >

<div class="col-md-6" ></div>


<h4>Areas - Jefe de Areas</h4>
<hr>
<table class="table table-bordered print" >

<thead>
<tr>
<th>ID</th>
<th>Areas</th>
<th>Jefes de Areas</th>



</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$sn=1;
$menulist= "SELECT * FROM areas a, jefes_areas j WHERE a.id_area=j.id_area  AND a.estado=1 AND j.estado=1 ORDER BY (j.id_area) asc";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $menudata ['id_area']; ?></td>

<td><?php echo $menudata['nombre']; ?></td>
<td><?php echo $menudata['nombres']; ?></td>



</tr>
<?php           $sn++;

}
?>
</tbody>

</table>

<div class="text-center">

        <a href="areas_jef_print.php" class="btn btn-primary">Imprimir</a>
      </div>

</div>

</div>

</div>
</center>


       
<?php require_once "../footer.php" ?>

</body>
</html>