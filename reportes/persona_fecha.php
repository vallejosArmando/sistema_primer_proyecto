
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" 
    media="print">
    <link rel="stylesheet" href="foto.css">
<?php  require_once "../head.php" ;?>
<body >
<?php require_once "menu.php" ;?>
<?php include_once "../conexion.php";?>
<body>
    <br>
<div class="container">

<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="70" height="70"   >
    </div>
    <center>   <form id="print-btn" action="busqueda.php" method="post">

<input type="date" name="f1" required>
<input type="date" name="f2" required>
<input type="submit" name="enviar" value="Enviar">

</form></center>
 
    <br>

    <center>

<div class="container"> 
<center><h2>Personas usuarios</h2></center>

<div class="row" >

<div class="col-md-6" ></div>


<table class="table table-bordered print" >

<thead>
<tr>
<th>S.No</th>
<th>Persona</th>
<th>Fechas</th>



</tr>
</thead>
<tbody>

    <?php 
    $v=mysqli_query($con," SELECT * FROM personas  ");
    while ($personas=mysqli_fetch_row($v)){

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
    </center>
    <div class="text-center">
<a href="persona_fecha.php" id="print-btn" class="btn btn-light">Cancelar</a>

        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>
      </div>

    <center><p>Tarija, <?php echo fechaC(); ?></p>  </center>
    <?php require_once "../footer.php" ?>

