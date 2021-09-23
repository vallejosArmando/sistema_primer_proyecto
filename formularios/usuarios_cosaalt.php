<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estyless.css">
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali3.js"></script>
   
   
    <title>Document</title>
</head>

<body >
<?php include 'menu2.php' ?>

    <form action="conexion3.php" id="form1" name="form1" method="post">
        <fieldset>
            <legend class="leg">Usuarios o socios de Cosaalt</legend>

            <div id="div"> <label for="nombre">Nombre del usuario: </label>  
            <input type="text" name="nombre" id="nombre" maxlength="30"  placeholder="Nombres"></div>

            <div id="div"><label for="ap_paterno">Apellido paterno:</label>
            <input type="text" name="ap_paterno" id="ap_paterno" maxlength="30" placeholder="Apellido P."></div>

            <div id="div"><label for="ap_materono">Apellido materno:</label>
            <input type="text" name="ap_materno" id="ap_materno" maxlength="30" placeholder="Apellido M."></div>

            <div id="div"><label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" maxlength="30" placeholder="0000000"></div>

            <div id="div"><label for="correo_electronico">Email:</label>
            <input type="text" name="correo_electronico" id="correo_electronico" placeholder="@gmail.com"></div>


            <div id="div"><label for="codigo_usuario">Codogo_usuario:</label>
            <input type="text" name="codigo_usuario" id="codigo_usuario" placeholder="00000" maxlength="30"></div>

            <div id="div"><label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" maxlength="90" placeholder="Lugar don de vive"></div>

            <div id="div"><label for="id_sistema_reclamo">id del sistema</label>
            <select name="id_sistema_reclamo" id="id_sistema_reclamo">
                <option value="">  id_sistema</option>
                <?php 
                $host="127.0.0.1";
                $user = "root";
                 $password = ''; 
                 $database = "eric_herlan";
                 $conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");

                $v=mysqli_query($conexion,"SELECT * FROM sistema_reclamos");
while ($sistema_reclamos=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $sistema_reclamos[0]?>"><?php echo $sistema_reclamos[0] ?></option> <?php } ?>  
            </select></div><br>
            

               
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
                <input type="reset" value="BORRAR" class="boton2">
                
    </form>


</body>

</html>