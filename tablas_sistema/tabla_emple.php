<?php require '../include/scripts.php' ?>

<link rel="stylesheet" type="text/css" href="css/ficha.css">

<?php 
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
                        <?php require '../include/foot.php' ?>
