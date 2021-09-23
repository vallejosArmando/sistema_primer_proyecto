<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estyless.css">
    
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali11.js"></script>
    
    <title>Sistema Web Cosaalt.</title>
</head>

<body >
<?php include 'menu2.php' ?>

    <form action="conexion11.php" name="form1" id="form1" method="post">
    <fieldset>

    <legend class="leg">Direccion del empleado</legend>
<div id="div">
    <label for="pais">Pais:</label><input type="text" name="pais" id="pais"></div>
    <div id="div"><label for="departamento">Departamento:</label><input type="text" name="departamento" id="departamento"></div>
    
    <div id="div"><label for="barrio">Barrio:</label><input type="text" name="barrio" id="barrio"></div>

    <div id="div"><label for="calle">Calle:</label><input type="text" name="calle" id="calle"></div>

    <div id="div"><label for="entre_que_calles">Entre que calles:</label><input type="text" name="entre_que_calles" id="entre_que_calles"></div>

    <div id="div"><label for="numero_de_casa">Numero de casa:</label><input type="text" name="numero_de_casa" id="numero_de_casa" placeholder="00000"></div>

    <div id="div"><label for="comunidad">O Comunidad:</label><input type="text" name="comunidad" id="comunidad"></div>
    

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
    
                <input type="button" value="ENVIAR" class="boton" onclick="validar ();">
                <input type="reset" value="BORRAR" class="boton2">
            
    </form>
</body>
</html>