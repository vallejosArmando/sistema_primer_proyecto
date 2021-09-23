<?php 

        require_once '../conexion.php';

if(isset($_POST['id_empleado'])){
    $id_empleado=$_POST['id_empleado'];


    $sql = "SELECT  * FROM empleados WHERE id_empleado='$id_empleado' ";
    $data= mysqli_query($con,$sql);
                 


 echo $data;


}
?>