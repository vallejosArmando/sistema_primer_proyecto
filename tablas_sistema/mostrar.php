
<?php require '../include/scripts.php' ?>

<body>
<?php require '../include/header.php'; ?>
<section id="container">

<h2 id="h2">TABLA SISTEMAS</h2>

<div class="agregar">
        <a href="../formularios/sistema.php" class="btn btn-primary">Agregar</a>
      </div>
<br>

	  <div class="" >
	  <table class="tabla" border="2" >
<thead class="thead">

<tr>
</tr>
<tr>
<th>Nr</th>
<th>Nombre</th>
<th>Nombre  Creador</th>
<th>Logo</th>
<th colspan="2" >Acciones</th>

</tr>
</thead>

<tbody>
<?php 
require '../conexion.php';

$sql_registe = mysqli_query($con,"SELECT COUNT(*) as total_registro FROM sistema_reclamos WHERE estado = 1 ");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);


$sql=" SELECT *FROM sistema_reclamos WHERE estado=1 ORDER BY id_sistema_reclamo asc LIMIT $desde,$por_pagina";
$sqlist=mysqli_query($con,$sql);
while ($data=mysqli_fetch_assoc($sqlist)) {

?>
<tr>

<td><?php echo $data['id_sistema_reclamo'];  ?></td>
<td><?php echo $data['nombre'];  ?></td>
<td><?php echo $data['nombre_creador']; ?></td>
<td><?php   echo '<img src="'.$data["logo"].'" width="50" heigth="10"><br>'; ?></td>
<td> <a href="modificar.php?id_sistema_reclamo=<?php echo $data['id_sistema_reclamo']; ?> ">Editar</a> </td>
<td>  <a class="btn btn-danger" id="delete" data-id=<?php echo $data['id_sistema_reclamo']; ?> href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a></td></tr>
<?php       } ?>
</tbody>
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

		</div>
</section>
		<?php include '../include/foot.php'; ?>


<script>
	$(document).ready(function(){
		
		readProducts(); /* it will load products when document loads */
		
		$(document).on('click', '#delete', function(e){
			
			var id_sistema_reclamo = $(this).data('id');
			SwalDelete(id_sistema_reclamo);
			e.preventDefault();
		});
		
	});
	
	function SwalDelete(id_sistema_reclamo){
		
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
			   		url: 'eliminar.php',
			    	type: 'POST',
			       	data: 'id_sistema_reclamo='+id_sistema_reclamo,
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
		$('#').load('mostrar.php');	
	}
	
</script>
</body>
</html>