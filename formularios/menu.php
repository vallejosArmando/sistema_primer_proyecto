<?php

//Si nadie inció sesión vuelve a la pag de Login
session_start();

if ($_SESSION["s_usuario"] === null) {
  header("Location: ../tablaSeguridad/index.php");
}
?>
<?php
date_default_timezone_set('America/Santiago');

function fechaC()
{
  $mes = array(
    "", "Enero",
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
    "Diciembre"
  );
  return date('d') . " de " . $mes[date('n')] . " de " . date('Y');
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../tablaSeguridad/styleheaderr.css">

  <?php
  include '../conexion.php';
  $menulis = "SELECT * from sistema_reclamos where estado=1";
  $menulistar = mysqli_query($con, $menulis);
  $data = mysqli_fetch_assoc($menulistar);
  ?>
  <title>Cosaalt R.L.</title>
</head>

<body>

  <div class="headerrr">

    <div class="optionsBarrr">
      <p>Tarija, <?php echo fechaC(); ?></p>
      <span>|</span>

      <span class="user"><?php echo $_SESSION['s_usuario'] . ' - ' . $_SESSION['s_rol']; ?></span>
      <img class="photouserrr" src="../tablaSeguridad/img/user.png" alt="Usuario">
      <a href="../login/bd/logout.php"><img class="closerr" src="../tablaSeguridad/img/salir.png" alt="Salir del sistema" title="Salir"></a>
    </div>
  </div>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img class="img" src="../fotos/<?php echo $data['logo']; ?>" width="40" height="40">


    <a class="navbar-brand" href="#">..<?php echo $data['nombre']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <!--  <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
        <?php
        include_once '../conexion.php';



        $listargrup = "SELECT *FROM grupos WHERE gr_estado=1";
        $grupres = mysqli_query($con, $listargrup);
        while ($grupodata = mysqli_fetch_assoc($grupres)) {

          $id_grupo = $grupodata['id_grupo'];

          $accesqry = "SELECT * from accesos where id_grupo='$id_grupo' AND accesos.permisos='a'";
          $accessres = mysqli_query($con, $accesqry);
          $accessrow = mysqli_num_rows($accessres);
          if ($accessrow > 0) {

        ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span> <i class="<?php echo $grupodata['icono']; ?>"></i></span> <?php echo $grupodata['grupo']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php


                $submenulistqry = "SELECT * FROM opciones 
                inner join accesos on accesos.id_opcion=opciones.id_opcion
where opciones.op_estado='1' AND opciones.id_grupo='$id_grupo' AND opciones.mostrar='si' AND accesos.permisos='a' AND accesos.id_rol='" . $_SESSION["s_id_rol"] . "'  order by orden asc";
                $submenulistres = mysqli_query($con, $submenulistqry);
                while ($submenulistdata = mysqli_fetch_assoc($submenulistres)) { ?>
                  <a class="dropdown-item" href="<?php echo $submenulistdata['op_url']; ?>"><?php echo $submenulistdata['nombre']; ?></a>
                <?php } ?>
              </div>
            </li>
        <?php }
        } ?>
        <?php

        if ($_SESSION['s_id_rol'] == 1) {
        ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Configuracion
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../tablaSeguridad/grupo.php">Agregar Menu</a>
              <a class="dropdown-item" href="../tablaSeguridad/opcion.php">Agregar Sub Menu</a>
              <a class="dropdown-item" href="../tablaSeguridad/acceso.php">Permisos</a>
            </div>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>