<?php 

include '../conexion.php';

if (isset($_POST['grupo_submit'])){

    $grupo=$_POST['grupo'];
    $icono=$_POST['icono'];
    if ($grupo!=''){
    
        $insertar="INSERT INTO `grupos`(`id_grupo`, `grupo`, `icono`, `fec_insercion`, `fec_modificacion`, `usuario`, `gr_estado`) VALUES (null,'$grupo','$icono',now(),now(),1,1)";
        $respuesta=mysqli_query($con,$insertar);

    }
}
echo '<script> alert("Menu agregado con exito."); window.location="grupo.php"; </script>';
?>