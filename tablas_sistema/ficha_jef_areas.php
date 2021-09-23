<?php 

        require_once '../conexion.php';

if(isset($_POST['id_jefe_area'])){
    $id_jefe_area=$_POST['id_jefe_area'];


    $sql = " SELECT j.*, a.nombre as nombre FROM jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE id_jefe_area='$id_jefe_area' ";
    $data= mysqli_query($con,$sql);
                 


 echo $data;


}
?>