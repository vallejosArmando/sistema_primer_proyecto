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
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" href="foto.css">

</head>
<body>
<br> <br>

<div class="container">
<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>" alt="" srcset="" width="55" height="55"> <br>
    <?php echo $data['nombre'];?>
  <div class="row">
    <div class="col-md-12">
    <center>    <h2>Areas - Jefe de Areas</h2></center>



      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>ID</th>
            <th>Areas</th>
            <th>Jefes de areas</th>
          </tr>
        </thead>
        <tbody>
        <?php 
include_once '../conexion.php';
$sn=1;
$menulist= "SELECT * FROM areas a, jefes_areas j WHERE a.id_area=j.id_area  AND a.estado=1 AND j.estado=1 ORDER BY (j.id_area) asc";
$menulistar=mysqli_query($con,$menulist);
while($menudata=mysqli_fetch_assoc($menulistar)){

?>
<tr>
<td><?php echo $menudata ['id_area']; ?></td>

<td><?php echo $menudata['nombre']; ?></td>
<td><?php echo $menudata['nombres']; ?></td>



</tr>
<?php           $sn++;

}
?>
        </tbody>
      </table>
      <br><br>
			<center><p>Tarija, <?php echo fechaC(); ?></p>  </center>
      
        </div>
  </div>
</div>
</body>
<div class="text-center">
<a href="areas_jef.php" id="print-btn" class="btn btn-light">Cancelar</a>

        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>
      </div>
</html>






























