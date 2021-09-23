<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estyless.css">
    <script type="text/javascript" src="js/expresiones_regulares.js"></script>
    <script type="text/javascript" src="js/vali14.js"></script>
  
    <title>Document</title>
</head>

<body >
<?php include 'menu2.php'?>


    <form action="conexion15.php" id="form1" name="form1" method="POST">
        <fieldset >
        
                
            <legend class="leg">Datos del solisitante del reclamo:</legend>
              
            <div id="div"><label for="id_sistema_reclamo">id_sistema_reclamo:</label><input type="text" name="id_sistema_reclamo" id="id_sistema_reclamo"></div>
            
            <div id="div"><label for="nombres">Nombres:</label><input type="text" name="nombres" id="nombres"></div>

            <div id="div"><label for="ap">Apellido paterno:</label><input type="text" name="ap" id="ap"></div>

            <div id="div"><label for="am">Apellido materno:</label><input type="text" name="am" id="am"></div>



            <div id="div"><label for="telefono">Telefono:</label><input type="text" name="telefono" id="telefono"></div>

            <div id="div"><label for="cooreo">Correo:</label><input type="text" name="correo" id="correo"></div>

            <div id="div"><label for="codigo_usuario">codigo_usuario:</label><input type="text" name="codigo_usuario" id="codigo_usuario"></div>

            <div id="div"><label for="barrio">Barrio:</label><input type="text" name="barrio" id="barrio"></div>

            <div id="div"><label for="calle_avenida">Calle o avenida:</label><input type="text" name="calle_avenida" id="calle_avenida"></div>
            <div id="div"><label for="numero_de_casa">Numero de casa:</label><input type="text" name="numero_de_casa" id="numero_de_casa"></div>

            <div id="div"><label for="entre_que_calles">Entre que calles:</label><input type="text" name="entre_que_calles" id="entre_que_calles"></div>
         
            

        </fieldset>
        <br>

        <fieldset
        >
            
            <legend class="leg">Descripcion y lugar del reclamo:</legend>
            


            <div id="div"><label for="referencias">Referencias:</label><textarea name="referencias" id="referencias" placeholder="Escribe aquí las referencias para llegar al lugar "></textarea>
            </div>
            <div id="div"><label for="descripcion_del_reclamo">Descripcion del reclamo:</label><textarea name="descripcion_del_reclamo" id="descripcion_del_reclamo" placeholder="Escribe aqui el problema del reclamo"></textarea>
            </div>

            <div id="div"><label for="otro_recurrente">Otro recurrente:</label><input type="text" name="otro_recurrente" id="otro_recurrente"></div>
            <div id="div"><label for="telefono_del_recurrente">Telefono:</label><input type="text" name="telefono_del_recurrente" id="telefono_del_recurrente"></div>
            <div id="div"><label for="tipo_de_calzada">Tipo de calzada:</label><select type="text" name="tipo_de_calzada" id="tipo_de_calzada">
                <option value="">..........</option>
                <option value="Tierra">Tierra</option>
                <option value="Empedrado">Empedrado</option>
                <option value="Asfalto">Asfalto</option>
                <option value="Adoquin">Adoquin</option>
                <option value="cemento">Cemento</option>
                <option value="En la acera">En la acera</option>
            </select>
            </div>
            <div id="div"><label for="tipo_de_reclamo">Tipo de  reclamo:</label><select type="text" name="tipo_de_reclamo" id="tipo_de_reclamo">
                <option value="">..........</option>
                <option value="Fuga de agua en medidor">Fuga de agua en medidor</option>
                <option value="fuga de agua en la matriz">fuga de agua en la matriz</option>
                <option value="taponamiento de alcantarillado">taponamiento de alcantarillado</option>
                <option value="rotura de matriz a.s.">rotura de matriz a.s.</option>
                <option value="falta de agua">falta de agua </option>
                <option value="tapnamiento en medidor">tapnamiento en medidor</option>
            </select> </div>
      
            </div>
           
            
        </fieldset>
        
                <input type="button" value="ENVIAR" class="boton" onclick="validar();">
                <input type="reset" value="BORRAR" class="boton2">
            
    </form>
</body>

</html>