
<?php require '../include/scripts.php' ?>

<?php require '../include/header.php';
?>
<section id="container">

<h2 id="h2">TABLA EMPLEADOS </h2>

    <div class="agregar"><a href="../formularios/empleados.php" class="btn btn-primary"> Agregar </a> </div>

    <div class="col-md-6"></div>
	<div class="col-md-2">
		<label>Area</label>
        
		<select id="id_area" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
					require_once '../conexion.php';

            	$sql="SELECT * FROM `empleados` WHERE estado=1 ";
                $result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[3] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	
	<div class="col-md-2">
		<label>Nombre</label>
		
		<select id="nombres" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
					require_once '../conexion.php';

				$sql="SELECT * FROM `empleados` WHERE estado=1";
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
		<label>Ap.Paterno</label>
		<select id="ap" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
					require_once '../conexion.php';

			$sql="SELECT * FROM `empleados` WHERE estado=1";
            $result=mysqli_query($con,$sql);
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
    
    <div id="tabla" ></div>




<?php require '../include/foot.php'; ?>
<script type="text/javascript">
	$(document).ready(function(){
	
  //  $('#buscador').load('buscador.php');
   $('#tabla').load('tabla_em.php');

	});
</script>

</body>
</html>