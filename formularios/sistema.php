


   
   
    <!DOCTYPE html>
<html >
<?php require_once "../head.php" ;?>
<link rel="stylesheet" type="text/css" href="estyless.css">
<script type="text/javascript" src="js/vali1.js"></script>
<script type="text/javascript" src="js/expresiones_regulares.js"></script>

<style media="screen">
    #uploadForm,
    #imagePreview{
      width: 720px;
      margin: 0;
    }
   
    </style>

<body >
<?php require_once "menu.php" ;?>
<?php include_once "../conexion.php";?>
<br>
<br> 

  

    
    <form action="conexio1.php" id="form1" name="form1"method="POST" enctype="multipart/form-data" class="form_search">
        <fieldset class="fi">
            <legend class="leg">Nombre del sistema y del creador</legend>

         
            <div id="div"> <label for="nombre">Nombre Del sistema</label>
            <input type="text" name="nombre" id="nombre" maxlength="80" placeholder="----------"></div>
            <div id="div"> <label for="nombre_creador">Nombre del creador:</label>
            <input type="text" name="nombre_creador" id="nombre_creador" maxlength="80" placeholder="----------"></div>
            <div id="div"><label for="logo">Logo :</label><input type="file" name="logo" id="logo"></div>
      

        </fieldset>
        
            <input  type="button" value="ENVIAR" class="boton" onclick="validar();">
            <a href="../tablas_sistema/mostrar.php"  >   <input type="button" name="" id="" value="CANCELAR"  class="boton2" ></a>
            
    </form>
    <?php require_once "../footer.php" ?>


</body>

</html>