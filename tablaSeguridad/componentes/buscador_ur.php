<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id_usuario_rol,id_usuario,id_rol
						from usuario_roles";
				$result=mysqli_query($conexion,$sql);

 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Seleciona uno</option>
			<?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[1]." ".$ver[2] ?>
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
					data:'valor_usuario=' + $('#buscadorvivo').val(),
					url:'php/crearsession_usuario.php',
					success:function(r){
						$('#tabla_usuario').load('componentes/tabla_usuario.php');
					}
				});
			});
		});
	</script>