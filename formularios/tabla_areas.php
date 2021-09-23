<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" type="text/css" href="estyless.css">

    <link rel="stylesheet" href="swal2/sweetalert2.min.css">
    <script type="text/javascript" src="swal2/sweetalert2.all.min.js"></script>

    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali7.js"></script>

  
   
    <title>Document</title>
</head>

<body >
<?php include 'menu.php' ?>
    
<table border="2">
<thead>
<tr>
<th>id</th>
<th>nombre</th>
<th>nombre creador</th>
<th colspan="2">accion</th>

</tr>
</thead>
<tbody>
<?php require '../conexion.php'; 

$sql=" SELECT *FROM sistema_reclamos WHERE estado=1 ";
$sqlist=mysqli_query($con,$sql);
while ($data=mysqli_fetch_assoc($sqlist)) {

?>
<tr>

<td><?php echo $data['id_sistema_reclamo'];  ?></td>
<td><?php echo $data['nombre'];  ?></td>
<td><?php echo $data['nombre_creador']; ?></td>
<td><?php   echo '<img src="'.$data["logo"].'" width="50" heigth="10"><br>'; ?></td>
<td> <a href="modificar.php?id_sistema_reclamo=<?php echo $data['id_sistema_reclamo']; ?> ">Editar</a> </td>
<td>                <input type="button" value="ENVIAR" class="boton" onclick="eliminar();">
</td></tr>
<?php       } ?>
</tbody>
</table>

</body>
</html>