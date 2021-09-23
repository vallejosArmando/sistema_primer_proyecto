<?php 
	require_once "../../conexion.php";

	$sql="SELECT id_persona,id_sistema_reclamo,ci,nombres,ap,am,telefono,direccion 
						from personas";
				$result=mysqli_query($con,$sql);

 ?>
<br><br>

<div class="row" id="tabladinamica">
	<div class="col-md-6"></div>
	
	<div class="col-md-2">
		<label>*Nombre</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[3] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	
	<div class="col-md-2">
		<label>Ap. Paterno</label>
		
		<select id="buscadorvivo1" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
				$sql="SELECT id_persona,id_sistema_reclamo,ci,nombres,ap,am,telefono,direccion 
				from personas";
		$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo  $ver[4] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	<div class="col-md-2">
		<label>Ap.Materno</label>
		<select id="buscadorvivo2" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
			$sql="SELECT id_persona,id_sistema_reclamo,ci,nombres,ap,am,telefono,direccion 
			from personas";
				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[5] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tablaper.php');
					}
				});
			});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo1').select2();

			$('#buscadorvivo1').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo1').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tablaper.php');
					}
				});
			});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo2').select2();

			$('#buscadorvivo2').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo2').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tablaper.php');
					}
				});
			});
		});
	</script>
	
	