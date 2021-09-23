<nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">CodingNepal</a></div>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    
<?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img" src="../fotos/<?php echo $data['logo'];?>"   width="50" height="50"   >
    <a class="navbar-brand" href="#"><?php echo $data['nombre'];?></a>
  </div>

  
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
                    <li>
                        <a href="#" class="desktop-link"> <span> <i class="<?php echo $grupodata['icono']; ?>"></i></span> <?php echo $grupodata['grupo']; ?> <b class="caret"></b></a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features"> <span> <i class="<?php echo $grupodata['icono']; ?>"></i></span> <?php echo $grupodata['grupo']; ?> <b class="caret"></b></label>
                        <ul>
                        <?php
    

    $submenulistqry="SELECT * FROM opciones 
                    inner join accesos on accesos.id_opcion=opciones.id_opcion
    where opciones.op_estado='1' AND opciones.id_grupo='$id_grupo' AND opciones.mostrar='si' AND accesos.permisos='a' AND accesos.id_rol='".$_SESSION["s_id_rol"]."' order by orden asc";
    $submenulistres=mysqli_query($con,$submenulistqry);
    while($submenulistdata=mysqli_fetch_assoc($submenulistres))
    {?>
                            <li><a href="<?php echo $submenulistdata['op_url'];?>"><?php echo $submenulistdata['nombre'];?></a></li>
                            <?php }?>

                        </ul>
                    </li>
                    <?php }} ?>
<?php 

if($_SESSION['s_id_rol'] ==1){
  ?>
                    <li>
                        <a href="#" class="desktop-link">Services</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">Services</label>
                        <ul>
                        <li><a  href="../grupo.php">Agregar Menu</a></li>
         <li><a  href="../opcion.php">Agregar Sub Menu</a></li> 
         <li><a  href="../acceso.php">Permisos</a></li> 
                      
                        </ul>
                    </li>
                    <?php } ?>

                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>