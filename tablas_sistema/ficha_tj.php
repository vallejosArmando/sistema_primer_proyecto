<!--ventana para Update--->
<link rel="stylesheet" href="../tablas_sistema/css/ficha.css">
<div class="modal fade" id="fichaJefeArea<?php echo $data['id_jefe_area'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #563d7c !important">
                <h1>
                    FICHA_JEFE_AREA
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

            <form method="POST" action="ficha_jef_areas.php" >
            <fieldset>
            <legend class="leg">Datos del Jefe de Area</legend>
            
                <input type="hidden" name="id_empleado" value="<?php echo $data['id_jefe_area'] ?>">

                <div id="div">
                    
                  
                    <div id="div">
                        <label for="" class="">Area:</label>
                        <input disabled value="<?php echo $data['nombre'] ?>">
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
                        <input disabled value="<?php echo $data['telefono'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Correo </label>
                        <input disabled value="<?php echo $data['correo']?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Fecha de inicio:</label>
                        <input  disabled value="<?php echo $data['fec_inicio'] ?>">
                    </div>
                    <div id="div">
                        <label for="" class="">Fecha de fin:</label>
                        <input  disabled value="<?php echo $data['fec_fin'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                 
       <!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>--> 
       <a href="ficha_imprimir_jefe.php" class="btn btn-primary">Imprimir</a>

                </div>
</fieldset>
            </form>

        </div>
    </div>
</div>
<!---fin ventana Update --->