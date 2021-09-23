<!DOCTYPE html>
<html >
<?php require_once "thead.php"; ?>
<body>
<?php require_once "../menu.php"; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Roles Permisos</h4>

			<form method="post" action="acceso_list.php">
				<div class="form-group">
					<label>Seleccione Rol</label>
					<select class="form-control" name="id_rol" required>
						<option value="">Selecione rol</option>
						<?php
						include '../conexion.php';
						$menulis="SELECT * from roles where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						while ($data=mysqli_fetch_assoc($menulistar)) {
						?>
						<option value="<?php echo $data['id_rol'];?>"><?php echo $data['rol'];?></option>
					<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="rol_update" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
<?php require_once "thefott.php"; ?>

</body>
</html>