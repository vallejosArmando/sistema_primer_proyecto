
<nav >
<ul>
<li><a href="">Inicio</a></li>

<!--<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="40" height="40">

  <a class="navbar-brand" href="#">..<?php echo $data['nombre'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>-->
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
<?php
include_once '../conexion.php';
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
      <li class="principal">
        <a href="#" >
        <span> <i class="<?php echo $grupodata['icono']; ?>"></i></span> <?php echo $grupodata['grupo']; ?>
          </a>
        <ul>
          <?php


$submenulistqry="SELECT * FROM opciones 
                inner join accesos on accesos.id_opcion=opciones.id_opcion
where opciones.op_estado='1' AND opciones.id_grupo='$id_grupo' AND opciones.mostrar='si' AND accesos.permisos='a' AND accesos.id_rol='".$_SESSION["s_id_rol"]."'  order by orden asc";
$submenulistres=mysqli_query($con,$submenulistqry);
while($submenulistdata=mysqli_fetch_assoc($submenulistres))
{?>
          <a  href="<?php echo $submenulistdata['op_url'];?>"><?php echo $submenulistdata['nombre'];?></a>
        <?php }?>
        </ul>
      </li>
<?php }} ?>
<?php 
if($_SESSION['s_id_rol'] ==1){
  ?>
      <li class="principal">
        <a >
          Configuracion
        </a>
        <ul>
          <a href="../tablaSeguridad/grupo.php">Agregar Menu</a>
          <a href="../tablaSeguridad/opcion.php">Agregar Sub Menu</a>
          <a href="../tablaSeguridad/acceso.php">Permisos</a>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </div>
  </ul>
</nav>