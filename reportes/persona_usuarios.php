<!DOCTYPE html>
<html >
  <link rel="stylesheet" href="foto.css">
<?php require_once "../head.php" ;?>
<body >
<?php require_once "menu.php" ;?>
<?php include_once "../conexion.php";?>

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


<h4>Perosnas usuarios</h4>
<hr>
<table class="table table-bordered print" >

<thead>
<tr>
<th>Nro.</th>
<th>Persona</th>
<th>Usuario</th>



</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$sn=1;
$menulist= "SELECT * FROM personas p, usuarios u WHERE p.id_persona=u.id_persona  AND p.estado=1 AND u.estado=1 ORDER BY (u.id_persona) DESC";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $sn; ?></td>

<td><?php echo $menudata['nombres']; ?></td>
<td><?php echo $menudata['nom_usuario']; ?></td>



</tr>
<?php           $sn++;

}
?>
</tbody>

</table>

<div class="text-center">

        <a href="usuario_persona.php" class="btn btn-primary">Imprimir</a>
      </div>

</div>

</div>

</div>
</center>


       
<?php require_once "../footer.php" ?>

</body>
</html>