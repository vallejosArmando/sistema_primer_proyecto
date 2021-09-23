<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<style>
*{
  margin:0;
  padding:0;
  -webkit-box-sizing: border-box;  
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body{
    background:url(imagenes/cosal13.jpg);
    -webkit-background-size: cover ;
    background-size: cover;
    background-attachment: fixed;
}
  h1{
    font-size: 1.5em;
    font-weight: normal;
    font-family: sans-serif;
    color: white;
    text-align: center;
    
    

    
}
p{
    size: 25px;
    color: white;
    margin-left: 10px;
    margin-bottom: 10px;
}
.tabla{
    margin: auto;
    width: 80%;
    background:black;
    margin-bottom: 20px;
}
th.imagen{
    
padding: 0px;
}

a{
    color: lightgreen;
    size: 20px;
    margin-left: 20px;
}
a:hover{
    color: beige;
}
header{
    background-color: chocolate;
    padding: 10px;
}
</style>
<body>
    
    <header><h1>DATOS GUARDADOS CON EXITO</h1></header>

<?php 

$host="127.0.0.1";
$user = "root";
 $password = ''; 
 $database = "eric_herlan";
$conexion=mysqli_connect($host,$user,$password)or die("Error con el servidor de la base de datos");
$bd=mysqli_select_db($conexion,$database)or die ("Error conexxion al conectarse a la base de datos");
$id_sistema_reclamo = $_POST["id_sistema_reclamo"];
$nombres = $_POST["nombres"];
$ap=$_POST["ap"];
$am=$_POST["am"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$codigo_usuario=$_POST["codigo_usuario"];
$barrio=$_POST["barrio"];
$calle_avenida=$_POST["calle_avenida"];
$numero_de_casa=$_POST["numero_de_casa"];

$entre_que_calles=$_POST["entre_que_calles"];
$referencias=$_POST["referencias"];
$descripcion_del_reclamo=$_POST["descripcion_del_reclamo"];

$otro_recurrente=$_POST["otro_recurrente"];
$telefono_del_recurrente=$_POST["telefono_del_recurrente"];
$tipo_de_calzada=$_POST["tipo_de_calzada"];
$tipo_de_reclamo=$_POST["tipo_de_reclamo"];

$sql="INSERT INTO reclamo_real VALUES(null,'$id_sistema_reclamo','$nombres','$ap','$am','$telefono','$correo','$codigo_usuario','$barrio','$calle_avenida',$numero_de_casa','$entre_que_calles','$referencias','$descripcion_del_reclamo','$otro_recurrente','$telefono_del_recurrente','$tipo_de_calzada','$tipo_de_reclamo',now(),now(),1,1)";


$ejec=mysqli_query($conexion,$sql);
if (!$ejec) {
    echo"Hubo Algun Error";
} else {
    echo " <a href='reclamo_real.php'>Volver</a>'";
}
?>
    <table border="2" class="tabla"> <tr><td>
   <p><?php echo " Nombre :    ".$nombres ;?> </p>
   <p><?php echo "Apellido paterno:   ".$ap;?></p>
<p><?php echo"Apellido materno:   ".$am;?></p>
<p><?php echo"Telefono:   ".$telefono;?></p>
<p><?php echo"Correo:   ".$correo;?></p>
<p><?php echo"Codigo del usuario:   ".$codigo_usuario;?></p>
<p><?php echo"Barrio: ".$barrio;?></p>

<p><?php echo"Calle o avenida:   ".$calle_avenida;?></p>
<p><?php echo"Numero de casa:   ".$numero_de_casa;?></p>

<p><?php echo"Entre que calles:   " .$entre_que_calles;?></p>
</td><td>
<p><?php echo"Referencias:   ".$referencias;?></p>
<p><?php echo"Descripcion del reclamo:   ".$descripcion_del_reclamo;?></p>
<p><?php echo"Otro recurrente:    ".$otro_recurrente;?></p>
<p><?php echo"Telefono del recurrente:     ".$telefono_del_recurrente;?></p>
<p><?php echo"Tipo de calzada:     ".$tipo_de_calzada;?></p>
<p><?php echo"Tipo de reclamo:     ".$tipo_de_reclamo;?></p>


 </table>


</body>
</html>