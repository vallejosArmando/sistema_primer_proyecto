<!DOCTYPE html>
<html lang="es">
<?php require_once '../head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estyless.css"> 
    <title>Document</title>
</head>

<body >

<?php include 'menu.php'; ?>
    <form action="conexion17.php" name="form1" id="form1" method="post">
    <fieldset>
    <legend class="leg">Asignaciones:</legend>
    <div id="div"><label for="id_conf">Reclamo Confirmado</label>
            <select name="id_conf" id="id_conf">
                <option value=""> Reclamos</option>
                <?php 
            require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM reclamo_confirmados");
while ($reclamo=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $reclamo[0]?>"><?php echo $reclamo[2] ?> - <?php echo $reclamo[3] ?></option> <?php } ?>  
            </select></div>
            <div id="div"><label for="id_empleado">Empleado a asignar:</label>
            <select name="id_empleado" id="id_empleado"  >
                <option value="">Empelado:</option>
                <?php 
              require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM empleados");
while ($empleados=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $empleados[0]?>"><?php echo $empleados[4] ?> - <?php echo $empleados[5] ?></option> <?php } ?>     

            </select> </div>
            <div id="div"><label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="......">
             </div>
             <div id="div"><label for="fec_inicio">fecha de inicio</label>
            <input type="date" name="fec_inicio" id="fec_inicio" placeholder="--/--/--/">
             </div>
             <div id="div"><label for="fec_fin">Fecha fin</label>
            <input type="date" name="fec_fin" id="fec_fin" placeholder="--/--/--/">
             </div>
         
    </fieldset>
    
                <input type="submit" value="ENVIAR" class="boton">
                <a href="../tablas_sistema/tabla_asignacion.php"  >   <input type="button" name="" id="" value="CANCELAR"  class="boton2" ></a>        
    </form>
    <?php require_once '../footer.php'; ?>
</body>
</html>