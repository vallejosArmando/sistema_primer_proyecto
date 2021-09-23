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

    <form action="../reportes/personas_genero.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Reporte genero</legend>
            <div id="div"><label for="genero">genero</label>
            <select name="genero" id="genero"  >
                <option value="selected">Tipo</option>
                <option value="todos">todos</option>
                <option value="F">F</option>
                <option value="M">M</option>

                

            </select> </div>
           <br> 
           
        </fieldset>
        
                <input type="submit" value="ENVIAR" class="boton">
               <a href="../tablaSeguridad/personas.php"><input type="button" value="CANCELAR" class="boton2"></a> 
            
    </form>
    <?php require_once "../footer.php" ?>

</body>

</html>