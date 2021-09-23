<!DOCTYPE html>
<html >
<?php require_once "thead.php" ;?>
<body>
<?php require_once "../menu.php" ;?>
<?php include_once "../conexion.php";?>

<div class="container"> 
<div class="row" >

<div class="col-md-6" >
<h4>Listar Opciones</h4>
<hr>
<table class="table table-bordered ">

<thead>
<tr>
<th>S.No</th>
<th>Grupo</th>
<th>Nombre</th>
<th>URL</th>
<th>Orden</th>


</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$menulist="SELECT opciones.*,grupos.grupo  FROM opciones  INNER JOIN grupos  ON grupos.id_grupo=opciones.id_grupo WHERE op_estado=1";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $menudata['id_opcion']; ?></td>
<td><?php echo $menudata['grupo']; ?></td>
<td><?php echo $menudata['nombre']; ?></td>
<td><?php echo $menudata['op_url']; ?></td>
<td><?php echo $menudata['orden']; ?></td>


</tr>
<?php 
}
?>
</tbody>

</table>

</div>
<div class="col-md-6" >
<h4>Agregar Opciones</h4>
<hr>
<form action="opcion_db.php" method="post">
<div class="form-group" >
<select class="form-control" name="id_grupo" >
<option value="">Seleccione Grupo</option>
<?php 
$menulist="SELECT *FROM grupos WHERE gr_estado=1";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){
?>
<option value="<?php echo $menudata['id_grupo']; ?>"><?php echo $menudata['grupo']; ?> </option>
<?php } ?>
</select>
</div>
<div class="form-group" >

<input type="text" name="nombre"  placeholder="Nombre opcion"class="form-control" >
</div>
<div class="form-group" >
<input type="text" name="op_url" placeholder="URL"class="form-control" >
</div>
<div class="form-group" >
<select class="form-control" name="mostrar" id="mostrar" >
<option value="si">si</option>
<option value="no">no</option>

</select>
</div>
<div class="form-group" >
<select class="form-control" name="orden" >
<?php for($i=0;$i<100;$i++){ ?>
<option value="<?php  echo $i;?>"><?php echo $i;?></option>
<?php } ?>
</select>
</div>
<div class="form-group" >
<input type="submit" class="btn btn-primary" name="opcion_submit" value="Agregar Opcion">
</div>
</form>
</div>
</div>

</div>

<?php require_once "thefott.php" ?>
<script src="js/funciones_opciones.js"></script>

</body>
</html>