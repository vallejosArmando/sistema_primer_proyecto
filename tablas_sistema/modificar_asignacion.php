
<div class="modal fade" id="editChildresn<?php echo $data['id_asignar']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h3 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Reclamo
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

     

      <form  method="POST" action="mod_asignacion.php"  >
        <input type="hidden" name="id_asignar" value="<?php echo $data['id_asignar']; ?>">

            <div class="modal-body" id="cont_modal">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Reclamo confirmado :</label>
                  <input type="text" name="id_conf" class="form-control" value="<?php echo $data['id_conf']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Empleado:</label>
                  <input type="text" name="id_empleado" class="form-control" value="<?php echo $data['id_empleado']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Descripcion del reclamo:</label>
                  <input type="text" name="descripcion" class="form-control" value="<?php echo $data['descripcion']; ?>" required="true">
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