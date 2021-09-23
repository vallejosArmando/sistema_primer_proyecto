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
    <center>    <h2>Personas Genero</h2></center>
<table class="table table-bordered print" >

<thead>
<tr>
<th>Nro.</th>
<th>nombres</th>
<th>ap</th>
<th>am</th>
<th>telefono</th>
<th>direccion</th>
<th>genero</th>



</tr>
</thead>

<tbody>

<?php 
include_once '../conexion.php';
$sn=1;
$genero=$_POST["genero"];

if ($genero=="F"){
		$menulis="SELECT * from personas where genero='$genero'  AND estado=1";
		$menulist=mysqli_query($con,$menulis);
	while(	$F=mysqli_fetch_assoc($menulist)){?>
        <tr>
<td><?php echo $sn; ?></td>

<td><?php echo $F['nombres']; ?></td>
<td><?php echo $F['ap']; ?></td>
<td><?php echo $F['am']; ?></td>
<td><?php echo $F['telefono']; ?></td>
<td><?php echo $F['direccion']; ?></td>
<td><?php echo $F['genero']; ?></td>





</tr>
<?php  $sn++;
    }?>
    <?php
	
} if($genero=="M"){
	$menulis="SELECT * from personas where genero='$genero'  AND estado=1";
		$menulist=mysqli_query($con,$menulis);
        while(	$M=mysqli_fetch_assoc($menulist)){?>
            <tr>
    <td><?php echo $sn; ?></td>
    
    <td><?php echo $M['nombres']; ?></td>
    <td><?php echo $M['ap']; ?></td>
    <td><?php echo $M['am']; ?></td>
    <td><?php echo $M['telefono']; ?></td>
    <td><?php echo $M['direccion']; ?></td>
    <td><?php echo $M['genero']; ?></td>
    
    
    
    
    
    </tr>
    <?php  $sn++;
        }?>
        
        <?php
        
            }
            if($genero=="todos"){
                $menulis="SELECT * from personas where estado=1 ";
                $menulist=mysqli_query($con,$menulis);

while($menudata=mysqli_fetch_assoc($menulist)){?>


<tr>
<td><?php echo $sn; ?></td>

<td><?php echo $menudata['nombres']; ?></td>
<td><?php echo $menudata['ap']; ?></td>
<td><?php echo $menudata['am']; ?></td>
<td><?php echo $menudata['telefono']; ?></td>
<td><?php echo $menudata['direccion']; ?></td>
<td><?php echo $menudata['genero']; ?></td>





</tr>
<?php           $sn++;

}
}else{
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
<a href="../tablaSeguridad/personas.php" id="print-btn" class="btn btn-light">Cancelar</a>

        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>
      </div>
</html>
