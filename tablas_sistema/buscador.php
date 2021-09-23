
<script src="main.js"></script>


	<!--<div class="col-md-6"></div>
	<div class="col-md-2">
		<label>Area</label>
		<select id="buscadorvivo" class="form-control input-sm">
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
		
		<select id="buscadorvivo1" class="form-control input-sm">
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
		<select id="buscadorvivo2" class="form-control input-sm">
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
	
</div>-->


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