<!DOCTYPE html>
<html>
<?php require_once "thead.php";
include_once '../conexion.php';
$id_rol = $_POST['id_rol'];
?>

<body>
	<?php require_once "../menu.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Permiso a usuario</h4>

				<form method="post" action="acceso_db.php">
					<input type="hidden" name="id_rol" value="<?php echo $id_rol; ?>">
					<table class="table">
						<thead>
							<tr>
								<th>Grupos</th>
								<th>Opciones</th>
								<th>Permisos</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$menul = "SELECT * from opciones 
		 INNER JOIN grupos  ON grupos.id_grupo=opciones.id_grupo 
		 where opciones.op_estado=1";
							$menuli = mysqli_query($con, $menul);
							while ($mdata = mysqli_fetch_assoc($menuli)) {
							?>
								<input type="hidden" name="id_grupo[]" value="<?php echo $mdata['id_grupo']; ?>">
								<input type="hidden" name="id_opcion[]" value="<?php echo $op_id = $mdata['id_opcion']; ?>">
								<tr>
									<td><?php echo $mdata['grupo']; ?></td>
									<td><?php echo $mdata['nombre']; ?></td>
									<td>
										<?php
										$menulis = "SELECT permisos from accesos where id_opcion='$op_id' AND id_rol='$id_rol'";
										$menulist = mysqli_query($con, $menulis);
										$mendata = mysqli_fetch_assoc($menulist);
										$permisos = $mendata;
										?>
										<select name="permisos" class="form-control">
											<?php
											if ($permisos) {
											?><option value="<?php echo $permisos; ?>"> <?php echo $permisos; ?></option>
											<?php
											} ?>
											<option value="x">x</option>
											<option value="a">a</option>
										</select>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
					<input type="submit" name="accesosubmit" class="btn btn-primary" value="AGREGAR">
				</form>
			</div>
		</div>
	</div>
	<?php require_once "thefott.php"; ?>




</body>

</html>