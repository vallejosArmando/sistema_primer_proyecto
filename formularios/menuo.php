

<?php
session_start();

//Si nadie inció sesión vuelve a la pag de Login


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
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styleheader.css">
 <!--<link rel="stylesheet" href="../formularios/header/header.css">-->
    <title>Hello, world!</title>
  </head>
  <style>
      body {
    background: url(imagenes/cosal3.jpg);
    -webkit-background-size: cover;
    background-size: cover;
      }
   


  </style>
  <body>
	
		<div class="headerr">
			
			<div class="optionsBarr">
				<p>Tarija, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['s_usuario'].' - '.$_SESSION['s_rol']; ?></span>

				<img class="photouserr" src="img/user.png" alt="Usuario">
				<a href="../login/bd/logout.php"><img class="closer" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
	

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
  <a class="navbar-brand" href="#">Sistema Web Cosaalt.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
      
        <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Herramientas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../tablaSeguridad/personas.php">Personas</a>
          <a class="dropdown-item" href="../tablaSeguridad/usuario.php">Usuarios</a>
          <a class="dropdown-item" href="../tablaSeguridad/usuario_roles.php">Usuario_roles</a>
          <a class="dropdown-item" href="../tablaSeguridad/roles.php">Roles</a>
          <a class="dropdown-item" href="../tablaseguridad/accesos.php">Accesos</a>
          
          <a class="dropdown-item" href="../tablaSeguridad/opciones.php">Opciones</a>
          <a class="dropdown-item" href="../tablaSeguridad/grupos.php">Grupos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Parametros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sistema
        </a>
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="../formularios/sistema.php">Sistema</a>
          <a class="dropdown-item" href="../formularios/usuarios_cosaalt.php">Socio de Cosaalt</a>
          <a class="dropdown-item" href="../formularios/areas.php">Areas</a>
          <a class="dropdown-item" href="../formularios/jefe_areas.php">Jefes de area</a>
          <a class="dropdown-item" href="../formularios/empleados.php">Empleados</a>
          <a class="dropdown-item" href="../formularios/funciones_empleado.php">Funcion del empleado</a>
          <a class="dropdown-item" href="../formularios/direccion.php">Direccion del empleado</a>
          <a class="dropdown-item" href="../formularios/telefono.php">Telefono del empleado</a>
          <a class="dropdown-item" href="../formularios/horarios.php">Horario del empleado</a>
          <a class="dropdown-item" href="../formularios/reclamo_socios.php">Reclamo del socio</a>
          <a class="dropdown-item" href="../formularios/reclamo_otros.php">Reclamo de terceros u otros</a>
          <a class="dropdown-item" href="../formularios/reclamo_real.php">Reclamo real</a>
          <a class="dropdown-item" href="../formularios/asignacion.php">Asignar reclamos</a>
          
        </div>
      </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    
    </ul>
  </div>
        </div>
</nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>