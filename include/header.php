
<?php 
session_start();
if(!isset($_SESSION['s_rol']))
{
    header('location: ../');
}
?>
  <?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$data=mysqli_fetch_assoc($menulistar) ;
		
        ?>
<header>
    <div class="header">
        
        <h1 id="h1"><img class="imagen" src="../fotos/<?php echo $data['logo'];?>"   width="35" height="35">- <?php echo $data['nombre']; ?> </h1>
        <div class="optionsBar">
            <p>Tarija, <?php echo fechaC(); ?></p>
            <span>|</span>
            <span class="user"><?php echo $_SESSION['s_usuario'].' -'.$_SESSION['s_rol']; ?></span>
            <img class="photouser" src="./../public/images/user.png" alt="Usuario">
            <a href="../index.php"><img class="close" src="./../public/images/salir.png" alt="Salir del sistema" title="Salir"></a>
        </div>
    </div>
    <?php require 'menu2.php'; ?>
</header>
