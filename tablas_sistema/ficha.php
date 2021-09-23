<!--ventana para Update--->
<link rel="stylesheet" href="../tablas_sistema/css/ficha.css">
<div class="modal fade" id="fichaEmpleado<?php echo $data['id_empleado'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c !important">
                <h1>
                    FICHA_EMPLEADO
                </h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
                <?php
						include '../conexion.php';
						$menulis="SELECT * from sistema_reclamos where estado=1";
						$menulistar=mysqli_query($con,$menulis);
						$dato=mysqli_fetch_assoc($menulistar) ;
						?>

						
		<img class="img"  src="../fotos/<?php echo $dato['logo'];?>"   width="70" height="70"   >
  
            </div>

            <form method="POST" action="ficha_empleados.php" >
            <fieldset>
            <legend class="leg">Datos del Empleado</legend>
            
                <input type="hidden" name="id_empleado" value="<?php echo $data['id_empleado'] ?>">

                <div id="div">
                    <div  id="div">
                        <label for="" class="">Tipo empleado :</label>  
                        <input readonly value="<?php echo $data['id_tipo_empleado']?>">
                    </div>
                  
                    <div id="div">
                        <label for="" class="">Area:</label>
                        <input disabled value="<?php echo $data['id_area'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Nombres:</label>
                        <input disabled value="<?php echo $data['nombres']?>">
                        </div>
                    <div id="div">
                        <label for="" class="">Ap. paterno:</label>
                        <input disabled value="<?php echo $data['ap'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Ap. materno:</label>
                        <input disabled value="<?php echo $data['am'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Cedula:</label>
                        <input disabled value="<?php echo $data['ci'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Telefono:</label>
                        <input disabled value="<?php echo $data['tel_fijo'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Telefono </label>
                        <input disabled value="celular:<?php echo $data['tel_cel']?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Direccion:</label>
                        <input  disabled value="<?php echo $data['direccion'] ?>">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                 
       <!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>-->
        <a href="ficha_imprimir.php" class="btn btn-primary">Imprimir</a>
                </div>
</fieldset>
            </form>

        </div>
    </div>
</div>
<!---fin ventana Update --->