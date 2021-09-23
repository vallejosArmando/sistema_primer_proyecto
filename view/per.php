

<?php require '../include/scripts.php' ?>

<body>
<?php require '../include/header.php'; ?>
<section id="container">

<h2 id="h2">TABLA PERSONAS </h2>


<div class="agregar">
        <a href="../tablaSeguridad/personas.php" class="btn btn-primary">Nuevo</a>
      </div>    
   
      <table  border="2" class="tabla" >
      <thead class="thead">
			<tr>
            <th>id_persona</th>
				<th>ci</th>
				<th>Nombre</th>
				<th>ap_paterno</th>
				<th>ap_materno</th>
                <th>Telefono</th>
                <th>Direccion</th>
			
             
			</tr>
		</thead>
<br>
<tbody>

    <?php 
    foreach ($datos as $dato){
    echo"<tr>";
    echo "<td>".$dato["id_persona"]."</td>";
    echo "<td>".$dato["ci"]."</td>";
    echo "<td>".$dato["nombres"]."</td>";
    echo"<td>".$dato["ap"]."</td>";
    echo "<td>".$dato["am"]."</td>";
    echo"<td>".$dato["telefono"]."</td>";
    echo"<td>".$dato["direccion"]."</td>";
echo"</tr>";
    }
    ?>
   </tbody>
    </table>
</section>
    <?php include '../include/foot.php'; ?>

</body>
</html>