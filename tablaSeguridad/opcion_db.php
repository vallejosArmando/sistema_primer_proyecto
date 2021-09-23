<?php 

include_once '../conexion.php';

if (isset($_POST['opcion_submit'])){
    $id_grupo=$_POST['id_grupo'];
    $nombre=$_POST['nombre'];
    $op_url=$_POST['op_url'];
    $mostrar=$_POST['mostrar'];
    $orden=$_POST['orden'];

    if ($nombre!=""){
    
        $insertar="INSERT INTO `opciones`(`id_opcion`, `id_grupo`, `nombre`, `op_url`, `mostrar`, `orden`, `fec_insercion`, `fec_modificacion`, `usuario`, `op_estado`) VALUES (null,'$id_grupo','$nombre','$op_url','$mostrar','$orden',now(),now(),1,1)";
        $respuesta=mysqli_query($con,$insertar);

    }
}
echo '<script> alert("Menu agregado con exito."); window.location="opcion.php"; </script>';
?>