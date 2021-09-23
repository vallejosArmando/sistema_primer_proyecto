<?php
session_start();
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   
$nom_usuario = (isset($_POST['nom_usuario'])) ? $_POST['nom_usuario'] : '';
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : '';

$pass = md5($clave);

$consulta = "SELECT us.id_usuario as id_usuario, us.nom_usuario as nom_usuario, us.clave as clave, r.id_rol as id_rol, r.rol as rol FROM usuario_roles usr INNER JOIN roles r ON usr.id_rol = r.id_rol INNER JOIN usuarios us on us.id_usuario=usr.id_usuario WHERE nom_usuario='$nom_usuario' AND clave='$pass' ";	
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


if($resultado->rowCount() >= 1){ 
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);    
    $_SESSION["s_usuario"] = $nom_usuario;    
    $_SESSION["s_id_usuario"] = $data[0]["id_usuario"];
    $_SESSION["s_id_rol"] = $data[0]["id_rol"];
    $_SESSION["s_rol"] = $data[0]["rol"];
}else{
    $_SESSION["s_usuario"] = null;  
    $data=null;
}

print json_encode($data);//envio el array final el formato json a AJAX
$conexion=null;