<!DOCTYPE html>
<html lang="es">
<?php require_once "../head.php" ;?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estyless.css">
    
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali8.js"></script>
   
    <title>Cosaalt</title>
</head>

<body >
<?php include 'menu.php' ?>

    <form action="conexion8.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Jefes de areas</legend>

            <div id="div"><label for="id_area">id_area</label>
            <select name="id_area" id="id_area"  >
                <option value="">id_area</option>
                <?php 
              require '../conexion.php';

                $v=mysqli_query($con,"SELECT * FROM areas");
while ($areas=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $areas[0]?>"><?php echo $areas[2] ?></option> <?php } ?>        

            </select> </div>
      
            
             <div id="div"><label for="nombres">Nombre del jefe de area</label>
            <input type="text" name="nombres" id="nombres" placeholder="----------"> 
             </div>
             <div id="div"><label for="ap">Apellido paterno</label>
            <input type="text" name="ap" id="ap" placeholder="Ap_paterno"> 
             </div>
            <div id="div"><label for="am">Apellido materno</label>
            <input type="text" name="am" id="am" placeholder="Ap_materno">
            </div>
             <div id="div"><label for="ci">ci</label>
            <input type="text" name="ci" id="ci" placeholder="0000000">
             </div>
               <div id="div"><label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="0000000">
             </div>
               <div id="div"><label for="correo">Email</label>
            <input type="text" name="correo" id="correo" placeholder="@gmail.com">
             </div>
             <div id="div"><label for="fec_inicio">fecha de inicio</label>
            <input type="date" name="fec_inicio" id="fec_inicio" placeholder="--/--/--/">
             </div>
             <div id="div"><label for="fec_fin">Fecha fin</label>
            <input type="date" name="fec_fin" id="fec_fin" placeholder="--/--/--/">
             </div>
              <br> 
            

             
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
               <a href="../tablas_sistema/tabla_jefe_areas.php"  >   <input type="button" name="" id="" value="CANCELAR"  class="boton2" ></a>

        
    </form>
    <?php require_once "../footer.php" ?>

</body>

</html>