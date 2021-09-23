
<?php require '../include/scripts.php' ?>
<?php require '../include/header.php'; ?>
<?php require '../head.php'; ?>
<link rel="stylesheet" href="../include/css/estilos.css">
    <link rel="stylesheet" href="tabla.css">
<body>
<br><br><br><br><br>
<?php 
require '../conexion.php';

$id_sistema_reclamo=$_REQUEST["id_sistema_reclamo"];
$sql=" SELECT *FROM sistema_reclamos WHERE id_sistema_reclamo='$id_sistema_reclamo'";
$sqlist=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($sqlist) ;

?>
<h2 id="h2" >MODIFICAR SISTEMA</h2>
    <p>
        <form  action="mod_db.php?id_sistema_reclamo= <?php echo $data["id_sistema_reclamo"]; ?> " method="POST" enctype="multipart/form-data">
            <table border="1" class="tabla">
                <thead>
                <td><>Nombre:</td><td> <input type="text" name="nombre" value="<?php echo $data['nombre'];  ?>"></td>
            </tr>
            <tr >        
                <td><>Nombre creador:</td><td> <input type="text" name="nombre_creador" value="<?php echo $data['nombre_creador']; ?>"></td>
            </tr>
            <tr >
            <td ><>Foto:</td>  <td><input type="file" name="logo" id="logo" value="<?php echo $data['logo']; ?>" ></td>
            </tr>
            <tr>
            <td>  <a href="mostrar.php" class="btn btn-danger"> Cancelar</a>    
</td>

            <td><input type="submit" name="enviar" value="Actualizar" class="btn btn-primary"></td>
            </tr>
            </thead>
            </table>
        </form>    
        
        <br><br>
</body>
</html>