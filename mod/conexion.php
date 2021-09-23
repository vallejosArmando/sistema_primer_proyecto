<?php 
class Conectar{

public static function conexion(){

    $con= new mysqli("localhost","root","","sistema_test");
$con->query("SET NAMES utf8");
return $con;
}


}
?>