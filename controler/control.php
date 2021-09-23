<?php 
require_once ("../mod/Modelo_persona.php");

$per=new personas_model();
$datos=$per->get_personas();
require_once ("../view/per.php");

?>