<!DOCTYPE html>
<html lang="es">
<?php require_once "../head.php" ;?>

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
<div class="fff">
    <form action="Controlador.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Areas</legend>

            
        
            <div id="div"><label for="nombre">Nombre del area</label>
            <input type="text" name="nombre" id="nombre" placeholder="----------"> 
            </div>
            <div id="div"><label for="descripcion">Descripcion del area</label>
            <input type="text" name="descripcion" id="descripcion" placeholder="----------">
            </div>
           <br>
            
           
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
                <a href="../tablas_sistema/tabla_areas.php"  >   <input type="button" name="" id="" value="CANCELAR"  class="boton2" ></a>
        
    </form>
    <?php require_once "../footer.php" ?>

</body>

</html>