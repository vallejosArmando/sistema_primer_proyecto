<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" type="text/css" href="estyless.css">
    
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali12.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>


<body >
<?php include 'menu2.php'; ?>

    <form action="conexion12.php" name="form1" id="form1" method="post">
    <fieldset>
    <legend class="leg">Telefonos:</legend>
    <div id="div"><label for="telefono">Telefonos:</label><input type="text" name="telefono" id="telefono" placeholder="0000000"></div>
    <div id="div"><label for="id_empleado">id_empleado</label>
            <select name="id_empleado" id="id_empleado"  >
                <option value="">id_empleado</option>
                <?php 
                $host="127.0.0.1";
                $user = "root";
                 $password = ''; 
                 $database = "eric_herlan";
                 $conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

                $v=mysqli_query($conexion,"SELECT * FROM empleados");
while ($empleados=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $empleados[0]?>"><?php echo $empleados[0] ?></option> <?php } ?>     

            </select> </div>
    </fieldset>
    
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
                <input type="reset" value="BORRAR" class="boton2">
            
    </form>
</body>
</html>