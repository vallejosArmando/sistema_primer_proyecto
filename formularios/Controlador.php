<?php
	require_once "conexion.php";
	$conexion=conexion();
if(isset($_POST['nombre'])){
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    
    $sql="INSERT INTO areas VALUES(null,1,'$nombre','$descripcion',now(),now(),1,1)";
    
    $ejec=mysqli_query($conexion,$sql);
    echo "<p>Se guardo correctamente</p> <a href='areas.php'>volver</a>";
        echo "<br>El nombre del area  es: ".$nombre;
    echo "<br>La descripcion es: ".$descripcion;
        echo "<p>Se guardo correctamente</p> <a href='areas.php'>volver</a>";
	if(isset($_POST['id'])){
    	$id=$_POST['id'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="UPDATE t_persona set nombre='$n',
								apellido='$a',
								email='$e',
								telefono='$t'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);
	if(isset($_POST['id'])){
		$id=$_POST['id'];

		$sql="DELETE from t_persona where id='$id'";
		echo $result=mysqli_query($conexion,$sql);
       }else{
         $query = "INSERT INTO imagenes(imagen,nombre) values('$imagen','$nombre')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'imagenes/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../index.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>