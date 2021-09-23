<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $data['id_jefe_area']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header" style="background-color: #563d7c !important;">
        <h3 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Jefe de Area
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form  method="POST" action="mod_jefe_area.php"  >
        <input type="hidden" name="id_jefe_area" value="<?php echo $data['id_jefe_area']; ?>">

            <div class="modal-body" id="cont_modal">
              
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Area:</label>
                  <input type="text" name="id_area" class="form-control" value="<?php echo $data['id_area']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombres" class="form-control" value="<?php echo $data['nombres']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Ap. Paterno:</label>
                  <input type="text" name="ap" class="form-control" value="<?php echo $data['ap']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Ap. Materno:</label>
                  <input type="text" name="am" class="form-control" value="<?php echo $data['am']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cedula:</label>
                  <input type="text" name="ci" class="form-control" value="<?php echo $data['ci']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="text" name="telefono" class="form-control" value="<?php echo $data['telefono']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Email:</label>
                  <input type="text" name="correo" class="form-control" value="<?php echo $data['correo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de inicio:</label>
                  <input type="text" name="fec_inicio" class="form-control" value="<?php echo $data['fec_inicio']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha fin:</label>
                  <input type="text" name="fec_fin" class="form-control" value="<?php echo $data['fec_fin']; ?>" required="true">
                </div>
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->