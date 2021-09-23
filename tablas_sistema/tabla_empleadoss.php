



<?php require '../include/scripts.php' ?>

<?php require '../include/header.php';
?>
<section id="container">

<h2 id="h2">TABLA EMPLEADOS </h2>

    <div class="agregar"><a href="../formularios/empleados.php" class="btn btn-primary"> Agregar </a> </div>
	<div id="contador"></div>
	<div id="tabla"></div>
    
<table  border="2" class="tabla" >
<thead  class="thead" >
<tr>
<th >id</th>
<th>Tipo empleado</th>
<th>Area</th>
<th>Nombre</th>
<th>Ap. paterno</th>
<th>Ap. materno</th>
<th>Cedula</th>
<th>Telefono</th>
<th>Tel. celular</th>
<th>Direccion</th>
<th colspan="3">Accion</th>

</tr>

</thead>
<br>
<tbody>
<?php 
require '../conexion.php';
$sql_registe = mysqli_query($con,"SELECT COUNT(*) as total_registro FROM empleados WHERE estado = 1 ");
$result_register = mysqli_fetch_array($sql_registe);
$total_registro = $result_register['total_registro'];

$por_pagina = 5;

if(empty($_GET['pagina']))
{
	$pagina = 1;
}else{
	$pagina = $_GET['pagina'];
}
//Paginador

require '../conexion.php';

session_start();

if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta'] > 0){
        $idp=$_SESSION['consulta'];
    
		$sql="SELECT * FROM `empleados`  where id_empleado='$idp' and estado=1 ";
    }else{
	
		$sql="SELECT * FROM `empleados` WHERE estado=1 ORDER BY id_empleado desc  ";    
	
    }
}else{
 
	$sql=" SELECT *  FROM empleados WHERE estado=1 ORDER BY id_empleado desc ";      
}


   
$desde = ($pagina-1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);
$sql=" SELECT * FROM empleados WHERE id_empleado= '$idp' AND  estado=1 ORDER BY id_empleado desc LIMIT $desde,$por_pagina";
$respuesta= mysqli_query($con,$sql);
 while ( $data= mysqli_fetch_assoc($respuesta)) {
   

?>
<tr>
<td><?php echo $data['id_empleado']; ?></td>
<td><?php echo $data['id_tipo_empleado']; ?></td>
<td><?php echo $data['id_area']; ?></td>
<td><?php echo $data['nombres']; ?></td>
<td><?php echo $data['ap']; ?></td>
<td><?php echo $data['am']; ?></td>
<td><?php echo $data['ci']; ?></td>
<td><?php echo $data['tel_fijo']; ?></td>
<td><?php echo $data['tel_cel']; ?></td>
<td><?php echo $data['direccion']; ?></td>
<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editChildresn<?php echo $data['id_empleado']; ?>">
                                  Modificar
                              </button></td>
<td>  <a class="btn btn-danger" id="delete" data-id=<?php echo $data['id_empleado']; ?> href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a></td>
<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fichaEmpleado<?php echo $data['id_empleado']; ?>">
                                  Ficha
                              </button></td>
                          </tr>
                  <!--Ventana Modal para Actualizar--->
                      <?php  include('modificar_empleado.php'); ?>
					  <?php  include('ficha.php'); ?>



                        <?php } ?>
                
                    </table>

					<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>
</section>



<?php require '../include/foot.php'; ?>
<script src="main.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	
    $('#buscador').load('buscador.php');
    $('#tabla').load('tabla_emple.php');

	});
</script>
<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete', function(e){
			
			var id_empleado = $(this).data('id');
			SwalDelete(id_empleado);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(id_empleado){
		
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
			   		url: 'eliminar_empleado.php',
			    	type: 'POST',
			       	data: 'id_empleado='+id_empleado,
			       	dataType: 'json'
			     })
			     .done(function(response){
			     	swal('Eliminado!', response.message, response.status);
					readProducts();
			     })
			     .fail(function(){
			     	swal('Oops...', 'No se puede eliminar por que esta en uso:!', 'question');
			     });
			  });
		    },
			allowOutsideClick: false			  
		});	
		
	}
	
	function readProducts(){
		$('#load-products').load('tabla_empleados.php');	
	}
	
</script>
</body>
</html>