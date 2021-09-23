<!DOCTYPE html>
<html lang="es">
<?php require_once "../head.php" ;?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" type="text/css" href="estyless.css">
    
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali9.js"></script>
    
   
    <title>Document</title>
</head>

<body >
<?php include 'menu.php' ?>

    <form action="../reportes/tipo_empleado_param.php" id="form1" name="form1" method="post">
        <fieldset>
        <div id="div"><label for="id_tipo_empleado">tipo</label>
            <select name="id_tipo_empleado" id="id_tipo_empleado">
                <option value=""> Tipo</option>
                <?php 
            require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM tipo_empleados ");
while ($tipo=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $tipo[0]?>"><?php echo $tipo[0] ?></option> <?php } ?>  
            </select></div>
           <br> 
           
        </fieldset>
        
                <input type="submit" value="ENVIAR" class="boton">
               <a href="../tablaSeguridad/empleados.php"><input type="button" value="CANCELAR" class="boton2"></a> 
            
    </form>
    <?php require_once "../footer.php" ?>

</body>

</html>