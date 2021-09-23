
<?php require '../include/scripts.php' ?>

<body>
<?php require '../include/header.php'; ?>
<section id="container">


<h2 id="h2">TABLA ASIGNACION </h2>

  <div class="agregar"><a href="../formularios/asignaciones.php" class="btn btn-primary"> Agregar </a> </div>  
    
<table  border="2" class="tabla" >
<thead  class="thead" >
<tr>
<th >id</th>
<th>recconf</th>
<th>emplado</th>
<th>descr</th>
<th>inc</th>
<th>dimfin</th>

<th colspan="2">Accion</th>

</tr>

</thead>
<br>
<tbody>
<?php 
require '../conexion.php';
$sql=" SELECT * FROM asignaciones WHERE estado=1 ORDER BY id_asignar desc ";
$respuesta= mysqli_query($con,$sql);
 while ( $data= mysqli_fetch_assoc($respuesta)) {
   

?>
<tr>
<td><?php echo $data['id_asignar']; ?></td>
<td><?php echo $data['id_conf']; ?></td>
<td><?php echo $data['id_empleado']; ?></td>
<td><?php echo $data['descripcion']; ?></td>
<td><?php echo $data['fec_inicio']; ?></td>
<td><?php echo $data['fec_fin']; ?></td>

<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editChildresn<?php echo $data['id_asignar']; ?>">
                                  Modificar
                              </button></td>
<td>  <a class="btn btn-danger" id="delete" data-id=<?php echo $data['id_asignar']; ?> href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a></td>
                          </tr>
						  
                  <!--Ventana Modal para Actualizar--->
                      <?php  include('modificar_asignacion.php'); ?>


                        <?php } ?>
                
                    </table>
</section>
<?php require '../include/foot.php'; ?>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete', function(e){
			
			var id_asignar = $(this).data('id');
			SwalDelete(id_asignar);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(id_asignar){
		
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
			   		url: 'eliminar_asignacion.php',
			    	type: 'POST',
			       	data: 'id_asignar='+id_asignar,
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
		$('#asignar').load('tabla_asignacion.php');	
	}
	
</script>
</body>
</html>
