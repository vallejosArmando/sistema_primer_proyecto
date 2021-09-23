<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" type="text/css" href="estyless.css">
    <link rel="stylesheet" href="../include/css/estilos.css">
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali10.js"></script>
    <?php require '../include/scripts.php' ?>

    <title>Cosaalt  R.L.</title>
</head>

<body >
<?php require '../include/header.php'; ?>

    <form action="conexion10.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Tipo de Empleado</legend>

           
             <div id="div"><label for="nombre">Funcion:</label>
            <input type="text" name="nombre" id="nombre" placeholder="----------">
             </div>
             <div id="div"><label for="descripcion_funcion">Descripcion_funcion:</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="----------">
            </div>
        
        
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar ();">
                <input type="reset" value="BORRAR" class="boton2">
        
    </form>
    <?php require_once "../include/foot.php" ?>

</body>

</html>