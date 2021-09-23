
<?php
include '../conexion.php';
?>
<?php 
	date_default_timezone_set('America/Santiago'); 
	
	function fechaC(){
		$mes = array("","Enero", 
					  "Febrero", 
					  "Marzo", 
					  "Abril", 
					  "Mayo", 
					  "Junio", 
					  "Julio", 
					  "Agosto", 
					  "Septiembre", 
					  "Octubre", 
					  "Noviembre", 
					  "Diciembre");
		return date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}

?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" 
    media="print">
    <link rel="stylesheet" href="foto.css">

<?php require_once "../head.php" ;?>

<body >
<?php include_once "../conexion.php";

$f1=$_POST['f1']."0000-00-00 00:00:00";
$f2 =$_POST['f2']." 0000-00-00 23:59:59";
?>
<body>
    <br><br>
    <div class="container">

<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="70" height="70"> <br>    <?php echo $data['nombre'];?>

    </div>
    <center>   <form  id="print-btn" action="busqueda.php" method="post">

<input type="date" name="f1" required>
<input type="date" name="f2" required>
<input type="submit" name="enviar" value="Enviar">

</form></center>
 
    <br>

    <center>

<div class="container"> 
<center><h2>Personas Fecha</h2></center>

<div class="row" >

<div class="col-md-6" ></div>


<table class="table table-bordered print" >

<thead>
<tr>
<th>S.No</th>
<th>Persona</th>
<th>Fecha</th>



</tr>
</thead>
<tbody>

    <?php 
    $v=mysqli_query($con," SELECT * FROM personas where fec_insercion BETWEEN '$f1' AND '$f2' ");
    while ($personas=mysqli_fetch_array($v)){

    ?>
    <tr><td><?php echo $personas[0] ?></td>
   <td> <?php echo $personas[3]  ?>.</td> <td> <?php echo $personas[8] ?></td> 
    
    </tr>
    
    <?php } ?>
</tbody>
</table>
</div>
</div>

    </center>
    
   <div class=" ff "> DE: <?php echo $f1 ?> -- Asta: <?php echo $f2 ?></div> 
<br>
   <center><p>Tarija, <?php echo fechaC(); ?></p>  </center>
<br>
    <div class="text-center">
<a href="persona_fecha.php" id="print-btn" class="btn btn-light">Cancelar</a>

        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>
      </div>

    <?php require_once "../footer.php" ?>

</body>
</html>