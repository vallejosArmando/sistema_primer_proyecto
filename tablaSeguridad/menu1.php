
<?php

//Si nadie inció sesión vuelve a la pag de Login

if ($_SESSION["nom_usuario"] === null){
	header("Location: ../inde.php");
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
    <title>Document</title>
</head>
<body>

<div class="headerrr">
			
			<div class="optionsBarrr">
				<p>Tarija, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['nom_usuario'].' - '.$_SESSION['s_roles']; ?></span>
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
    <a class="navbar-brand" href="../index.php">COSAALT. L.R</a>
  </div>

  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
       <div class="div">
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="#"></a></li>
      <li><a href="../">Inicio</a></li>
      <li class="dropdown">
      
      
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Herramientas<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li> <a  href="../tablaSeguridad/personas.php">Personas</a></li>
          <li> <a href="../tablaSeguridad/usuario.php">Usuarios</a></li>
          <li> <a  href="../tablaSeguridad/usuario_roles.php">Usuario_roles</a></li>
          <li><a href="../tablaSeguridad/roles.php">Roles</a></li>
          <li><a  href="../tablaSeguridad/accesos.php">Accesos</a></li>
          <li><a href="../tablaSeguridad/opciones.php">Opciones</a></li>
          <li><a  href="../tablaSeguridad/grupos.php">Grupos</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Parametros<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li> <a  href="">Personas</a></li>
          <li> <a href="">Usuarios</a></li>
          <li> <a  href="">Usuario_roles</a></li>
          <li><a href="">Roles</a></li>
          <li><a  href="">Accesos</a></li>
          <li><a href="">Opciones</a></li>
          <li><a  href="">Grupos</a></li>
        </ul>
      </li>
      <li class="dropdown">
      
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Sistema<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
        <li><a  href="../formularios/sistema.php">Sistema</a></li>
          <li><a href="../formularios/usuarios_cosaalt.php">Socio de Cosaalt</a></li>
          <li><a  href="../formularios/areas.php">Areas</a></li>
          <li><a  href="../formularios/jefe_areas.php">Jefes de area</a></li>
          <li><a  href="../formularios/empleados.php">Empleados</a></li>
          <li><a  href="../formularios/funciones_empleado.php">Funcion del empleado</a></li>
          <li><a href="../formularios/direccion.php">Direccion del empleado</a></li>
          <li><a  href="../formularios/telefono.php">Telefono del empleado</a></li>
          <li><a  href="../formularios/horarios.php">Horario del empleado</a></li>
          <li><a  href="../formularios/reclamo_socios.php">Reclamo del socio</a></li>
          <li><a  href="../formularios/reclamo_otros.php">Reclamo de terceros u otros</a></li>
          <li><a  href="../formularios/reclamo_real.php">Reclamo real</a></li>
          <li><a  href="../formularios/asignacion.php">Asignar reclamos</a></li>         
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Reportes<b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li> <a  href="">Personas</a></li>
          <li> <a href="">Usuarios</a></li>
          <li> <a  href="">Usuario_roles</a></li>
          <li><a href="">Roles</a></li>
          <li><a  href="">Accesos</a></li>
          <li><a href="">Opciones</a></li>
          <li><a  href="">Grupos</a></li>
        </ul>
      </li>
    </ul>

  

    <!--<ul class="nav navbar-nav navbar-right">
      <li><a href="#">Enlace #3</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú #2 <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
        </ul>
      </li>
    </ul>-->
  </div>
  </div>
      
</nav>

</body>
</html>