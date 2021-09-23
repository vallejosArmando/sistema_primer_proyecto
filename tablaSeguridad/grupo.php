<!DOCTYPE html>
<html lang="es">
<?php require_once "thead.php" ?>
<body>
<?php require_once "../menu.php" ?>

<div class="container"> 
<div class="row" >

<div class="col-md-6" >
<h4>Listar menu</h4>
<hr>
<table class="table table-bordered ">

<thead>
<tr>
<th>S.No</th>
<th>Nombre de grupo</th>
<th>Icono</th>
</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$menulist="SELECT *FROM grupos WHERE gr_estado=1";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $menudata['id_grupo']; ?></td>

<td><?php echo $menudata['grupo']; ?></td>
<td><?php echo $menudata['icono']; ?></td>

</tr>
<?php 
}
?>
</tbody>

</table>

</div>
<div class="col-md-6" >
<h4>Agregar Menu</h4>
<hr>
<form action="grupo_db.php" method="post">
<div class="form-group" >
<input type="text" name="grupo" id="grupo"  placeholder="Nombre del Grupo"class="form-control" />
</div>
<div class="form-group" >
<input type="text" name="icono" id="icono"  placeholder="Icono del Grupo"class="form-control" />
</div>
<div class="form-group" >
<input type="submit" class="btn btn-primary" name="grupo_submit" value="Agregar Menu"/>
</div>
</form>
</div>
</div>

</div>

<?php require_once "thefott.php" ?>

</body>
</html>