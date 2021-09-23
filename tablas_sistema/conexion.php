

<?php 

function conexion(){
    $servidor="localhost";
    $usuario="root";
    $password="";
    $bd="sistema_test";

    $conexion=mysqli_connect($servidor,$usuario,$password,$bd);

    return $conexion;
}

?>