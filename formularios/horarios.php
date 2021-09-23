<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" type="text/css" href="estyless.css">
    
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali13.js"></script>
   
    <title>Document</title>
</head>

<body >
<?php include 'menu2.php' ?>
   
    <form action="conexion13.php" name="form1" id="form1" method="post">
    
    <fieldset>
    <legend class="leg">Horarios</legend>
    <div id="div"> <label for="hora_entrada">Entrada:</label> <input type= "time" name="hora_entrada" id="hora_entrada"> </div>
    <div id="div"><label for="hora_salida">Salida:</label><input type="time" name="hora_salida" id="hora_salida"></div>
   
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