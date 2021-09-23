

<?php require '../include/scripts.php' ?>
<script src="controlador/eliminar_area.js"></script>
<body>
<?php require '../include/header.php'; ?>
<section id="container">


<h2 id="h2">TABLA  AREAS </h2>


<div class="agregar">
        <a href="../formularios/areas.php" class="btn btn-primary">Agregar</a>
      </div>    
   
<table  border="2" class="tabla" id="t">
<thead  class="thead" >
<tr>
<th >id</th>
<th>Nombre</th>

<th>Descripcion</th>
<th colspan="2">Accion</th>

</tr>

</thead>
<br>
<tbody>
<?php 
$sql_registe = mysqli_query($con,"SELECT COUNT(*) as total_registro FROM areas WHERE estado = 1 ");
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
require '../conexion.php';
$sql=" SELECT * FROM areas WHERE estado=1 ORDER BY id_area desc LIMIT $desde,$por_pagina";
$respuesta= mysqli_query($con,$sql);
 while ( $data= mysqli_fetch_assoc($respuesta)) {
   

?>
<tr>

<td><?php echo $data['id_area']; ?></td>
<td><?php echo $data['nombre']; ?></td>

<td><?php echo $data['descripcion']; ?></td>
<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editChildresn<?php echo $data['id_area']; ?>">
                                  Modificar
                              </button></td>
<td>  <a class="btn btn-danger" id="delete" data-id=<?php echo $data['id_area']; ?> href="javascript:void(0)" onclick="eliminar();" ><i class="glyphicon glyphicon-trash"></i></a></td>
                          </tr>
                  <!--Ventana Modal para Actualizar--->
                      <?php  include('modificar_area.php'); ?>


                        <?php } ?>
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
</section>

<?php include '../include/foot.php'; ?>


</body>
</html>
