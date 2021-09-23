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


<h4>Empleados - tipo de Empleado</h4>
<hr>
<table class="table table-bordered print" >

<thead>
<tr>
<th>ID</th>
<th>Empleados</th>
<th>Tipo de empleado</th>
<th>Area</th>




</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$sn=1;
$menulist= "SELECT e.id_empleado as id, e.nombres as nombres, t.nombre as tipo, a.nombre as area FROM empleados e INNER JOIN tipo_empleados t on e.id_tipo_empleado=t.id_tipo_empleado INNER JOIN areas a on e.id_area=a.id_area where t.estado=1 AND e.estado=1 ANd a.estado=1 ORDER BY (id) asc";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $menudata ['id']; ?></td>
<td><?php echo $menudata['nombres']; ?></td>

<td><?php echo $menudata['tipo']; ?></td>
<td><?php echo $menudata['area']; ?></td>



</tr>
<?php           $sn++;

}
?>
</tbody>

</table>

<div class="text-center">

        <a href="empleados_tipo_print.php" class="btn btn-primary">Imprimir</a>
      </div>

</div>

</div>

</div>
</center>


       
<?php require_once "../footer.php" ?>

</body>
</html>