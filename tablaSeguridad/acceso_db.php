<?php
include '../conexion.php';

if(isset($_POST['accesosubmit']))
{
$id_rol=$_POST['id_rol'];
	if($id_rol!='')
	{
		$delete="DELETE FROM accesos where id_rol='$id_rol'";
		$delteres=mysqli_query($con,$delete);
		
		foreach ($_POST['permisos'] as $key => $value) {
			$permisos=$_POST['permisos'][$key];

			$id_grupo=$_POST['id_grupo'][$key];
			$id_opcion=$_POST['id_opcion'][$key];


			$insertar="INSERT INTO `accesos`(`id_acceso`, `id_grupo`, `id_opcion`, `id_rol`, `permisos`, `fec_insercion`, `fec_modificacion`, `usuario`, `estado`)  VALUES (null,'$id_grupo','$id_opcion','$id_rol','$permisos',now(),now(),1,1)";
			$respuesta=mysqli_query($con,$insertar);
		}
	}
}
echo '<script>alert(" Permiso consedido.");
		window.location="index.php";
</script>';
