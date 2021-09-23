<?php require '../include/scripts.php' ?>

<body>
<?php require '../include/header.php'; ?>
<section id="container">

<h2 id="h2">TABLA JEFE FE AREAS</h2>


            <div class="agregar">
                <a href="../formularios/jefe_areas.php" class="btn btn-primary">Agregar</a>
            </div>

    <div class="col-md-6"></div>
	<div class="col-md-2">
		<label>Area</label>
        
		<select id="nombre" class="form-control input-sm">
			<option value="0">Tabla</option>

			<?php
					require_once '../conexion.php';

            	$sql = " SELECT j.*, a.nombre as nombre FROM   jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE j.estado=1 ";
                $result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[1] ?>
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

				$sql="SELECT * FROM `jefes_areas` WHERE estado=1";
		$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo  $ver[2] ?>
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

			$sql="SELECT * FROM `jefes_areas` WHERE estado=1";
            $result=mysqli_query($con,$sql);
				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[3] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
	
</div>
    
    <div id="tablas" ></div>



    <?php require '../include/foot.php'; ?>
    <script type="text/javascript">
	$(document).ready(function(){
	
  //  $('#buscador').load('buscador.php');
   $('#tablas').load('t_jefe_areas.php');

	});
</script>
<script>
    $(document).ready(function() {

        readProducts(); /* it will load products when document loads */

        $(document).on('click', '#delete', function(e) {

            var id_jefe_area = $(this).data('id');
            SwalDelete(id_jefe_area);
            e.preventDefault();
        });

    });

    function SwalDelete(id_jefe_area) {

        swal({
            title: 'Estas seguro?',
            text: "Se borrará de forma permanente!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, bórralo!',
            showLoaderOnConfirm: true,

            preConfirm: function() {
                return new Promise(function(resolve) {

                    $.ajax({
                            url: 'eliminar_jefe_area.php',
                            type: 'POST',
                            data: 'id_jefe_area=' + id_jefe_area,
                            dataType: 'json'
                        })
                        .done(function(response) {
                            swal('Eliminado!', response.message, response.status);
                            readProducts();
                        })
                        .fail(function() {
                            swal('Oops...', 'No se puede eliminar por que esta en uso:!', 'question');
                        });
                });
            },
            allowOutsideClick: false
        });

    }

    function readProducts() {
        $('#').load('tabla_jefe_areas.php');
    }

</script>
</body>

</html>