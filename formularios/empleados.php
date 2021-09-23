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

    <form action="conexion9.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Tipo de empleado</legend>
            <div id="div"><label for="id_tipo_empleado">Tipo</label>
            <select name="id_tipo_empleado" id="id_tipo_empleado"  >
                <option value="">Tipo</option>
                <?php 
                require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM tipo_empleados");
while ($tipos=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $tipos[0]?>"><?php echo $tipos[1] ?></option> <?php } ?>      

            </select> </div>
            <div id="div"><label for="id_area">Area</label>
            <select name="id_area" id="id_area"  >
                <option value="">areas</option>
                <?php 
                require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM areas");
while ($areas=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $areas[0]?>"><?php echo $areas[2] ?></option> <?php } ?>      

            </select> </div>

             <div id="div"><label for="nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" placeholder="----------"> 
             </div>
             <div id="div"><label for="ap">apellido paterno:</label>
            <input type="text" name="ap" id="ap" placeholder="----------">
             </div>
             <div id="div"><label for="am">Apellido materno:</label>
            <input type="text" name="am" id="am" placeholder="----------"> 
             </div>
             <div id="div"><label for="ci">ci</label>
            <input type="text" name="ci" id="ci" placeholder="0000000-xx"> 
             </div>
             <div id="div"><label for="tel_fijo">Telefono:</label>
            <input type="text" name="tel_fijo" id="tel_fijo">
             </div>
             <div id="div"><label for="tel_cel">Celular:</label>
            <input type="text" name="tel_cel" id="tel_cel">
             </div>
             <div id="div"><label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion">
             </div>
           <br> 
           
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
               <a href="../tablas_sistema/tabla_empleados.php"><input type="button" value="CANCELAR" class="boton2"></a> 
            
    </form>
    <?php require_once "../footer.php" ?>

</body>

</html>