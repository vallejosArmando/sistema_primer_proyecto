<!DOCTYPE html>
<html lang="es">
<?php require '../include/scripts.php' ?>
<?php require '../include/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estyless.css">
    <link rel="stylesheet" href="../include/css/estilos.css">

    <title>Document</title>
    <style media="screen">
    #uploadForm,
    #imagePreview{
      width: 720px;
      margin: 0;
    }

    </style>
</head>

<body >

    <form action="conexion16.php" id="form1" name="form1" method="POST" enctype="multipart/form-data">
        <fieldset>
            
            <legend class="leg">Datos reales del reclamo:</legend>

          

            <div id="div"><label for="nombres" class="">Nombres:</label><input type="text" name="nombres" id="nombres" placeholder="" class="" ></div>

            <div id="div"><label for="ap">Apellido paterno:</label><input type="text" name="ap" id="ap"></div>

            <div id="div"><label for="am">Apellido materno:</label><input type="text" name="am" id="am"></div>


            <div id="div"><label for="telefono">Telefono:</label><input type="text" name="telefono" id="telefono" placeholder="0000000"></div>

            <div id="div"><label for="correo">Correo:</label><input type="text" name="correo" id="correo" placeholder="@gmail.com" ></div>

            <div id="div"><label for="codigo_usuario">Codigo usuario:</label><input type="text" name="codigo_usuario" id="codigo_usuario" placeholder="0000"></div>

            <div id="div"><label for="barrio">Barrio:</label><input type="text" name="barrio" id="barrio"></div>

            <div id="div"> <label for="calle_avenida">Calle o avenida:</label><input type="text" name="calle_avenida" id="calle_avenida"></div>

            <div id="div"><label for="entre_que_calles">Entre que calles:</label><input type="text" name="entre_que_calles" id="entre_que_calles"></div>

            <div id="div"><label for="numero_de_casa">Numero de casa:</label><input type="text" name="numero_de_casa" id="numero_de_casa" placeholder="00000"></div>

        </fieldset>
        <br>

        <fieldset>
            
            <legend class="leg">Descripcion y lugar del reclamo:</legend>
        


            <div id="div"><label for="referencias">Referencias:</label><textarea name="referencias" id="referencias" placeholder="Escribe aquí las referencias para llegar al lugar "></textarea>
            </div>
            <div id="div"><label for="descripcion_del_reclamo">Descripcion:</label><textarea name="descripcion_del_reclamo" id="descripcion_del_reclamo" placeholder="Escribe aqui el problema del reclamo"></textarea>
            </div>
           
            <div id="div"><label for="map">Mapa ubicacion:</label>
                <input type="text" name="map" id="map"></div>
            </div>
            <div id="div"><label for="otro_recurrente">Otro recurrente:</label><input type="text" name="otro_recurrente" id="otro_recurrente"></div>
            <div id="div"><label for="telefono_del_recurrente">telefono:</label><input type="text" name="telefono_del_recurrente" id="telefono_del_recurrente" placeholder="Telefono del recurrente"></div>
            <div id="div"><label for="tipo_de_calzada">Tipo de calzada:</label><select  name="tipo_de_calzada" id="tipo_de_calzada">
                <option selected>..........</option>
                <option value="Tierra">Tierra</option>
                <option value="Empedrado">Empedrado</option>
                <option value="Asfalto">Asfalto</option>
                <option value="Adoquin">Adoquin</option>
                <option value="Cemento">Cemento</option>
                <option value="En la acera">En la acera</option>
            </select>
            </div>

        </fieldset>
        
                <input type="submit" value="ENVIAR" class="boton" >
                <input type="reset" value="BORRAR" class="boton2">
            
    </form>
    
    <?php require_once "../include/foot.php" ?>

</body>

</html>