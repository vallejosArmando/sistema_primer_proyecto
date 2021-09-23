

<?php

//Si nadie inció sesión vuelve a la pag de Login
session_start();

if ($_SESSION["s_usuario"] === null){
	header("Location: index.php");
}
?>
<?php 
	date_default_timezone_set('America/Santiago'); 
	
	function fechaC(){
		$mes = array("","Enero", 
					  "Febrero", 
					  "Marzo", 
					  "Abril", 
					  "Mayo", 
					  "Junio", 
					  "Julio", 
					  "Agosto", 
					  "Septiembre", 
					  "Octubre", 
					  "Noviembre", 
					  "Diciembre");
		return date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleheaderr.css">
    <title>Cosaalt R.L.</title>
</head>
<body>

<div class="headerrr">
			
			<div class="optionsBarrr">
				<p>Tarija, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['s_usuario'].' - '.$_SESSION['s_rol']; ?></span>
				<img class="photouserrr" src="img/user.png" alt="Usuario">
				<a href="../login/bd/logout.php"><img class="closerr" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
	



<nav class="navbar navbar-default navbar-fixed-top "  role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->

       <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="50" height="50"   >
    <a class="navbar-brand" href="#"><?php echo $data['nombre'];?></a>
  </div>

  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
       <div class="div">
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="#"></a></li>
      <li><a href="../index.php">Inicio</a></li>
      <li class="dropdown">
      
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
<?php
include_once 'conexion.php';


$url= basename($_SERVER['REQUEST_URI']);
///get the sub menu id 
$opqry="SELECT id_opcion from opciones where op_url='$url'";
$opres=mysqli_query($con,$opqry);
$opdata=mysqli_fetch_assoc($opres);
$id_opcion=$opdata['id_opcion'];

///check menu access
$accqry="SELECT permisos FROM accesos WHERE id_opcion='$id_opcion' AND id_rol='".$_SESSION["s_id_rol"]."'";
$accres=mysqli_query($con,$accqry);
$accdta=mysqli_fetch_assoc($accres);
$permisos=$accdta['permisos'];


$listargrup="SELECT *FROM grupos WHERE gr_estado=1";
$grupres=mysqli_query($con,$listargrup);
while($grupodata=mysqli_fetch_assoc($grupres))
{

    $id_grupo=$grupodata['id_grupo'];

    $accesqry="SELECT * from accesos where id_grupo='$id_grupo' AND accesos.permisos='a'";
    $accessres=mysqli_query($con,$accesqry);
    $accessrow=mysqli_num_rows($accessres);
    if($accessrow>0){
    
    ?>
      <li class=" dropdown">
        <a class=" dropdown-toggle" href="#"  data-toggle="dropdown" >
        <span> <i class="<?php echo $grupodata['icono']; ?>"></i></span> <?php echo $grupodata['grupo']; ?> <b class="caret"></b>
          </a>
        <ul class="dropdown-menu" >
          <?php
    

$submenulistqry="SELECT * FROM opciones 
                inner join accesos on accesos.id_opcion=opciones.id_opcion
where opciones.op_estado='1' AND opciones.id_grupo='$id_grupo' AND opciones.mostrar='si' AND accesos.permisos='a' AND accesos.id_rol='".$_SESSION["s_id_rol"]."' order by orden asc";
$submenulistres=mysqli_query($con,$submenulistqry);
while($submenulistdata=mysqli_fetch_assoc($submenulistres))
{?>
        <li>  <a  href="<?php echo $submenulistdata['op_url'];?>"><?php echo $submenulistdata['nombre'];?></a></li>
        
        <?php }?>
        </ul>
      </li>
<?php }} ?>
<?php 

if($_SESSION['s_id_rol'] ==1){
  ?>
      <li class=" dropdown">
        <a class="dropdown-toggle" href="#"  data-toggle="dropdown" >
          Configuracion<b class="caret"></b>
        </a>
  
        <ul class="dropdown-menu">
 
         <li><a  href="grupo.php">Agregar Menu</a></li>
         <li><a  href="opcion.php">Agregar Sub Menu</a></li> 
         <li><a  href="acceso.php">Permisos</a></li> 
        </ul>
      </li>
      <?php } ?>

    </ul>
  </div>
</nav>
