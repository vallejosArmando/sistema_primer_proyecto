<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $data['id_empleado']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header" style="background-color: #563d7c !important;">
        <h3 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Empleado
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form  method="POST" action="mod_empleado.php"  >
        <input type="hidden" name="id_empleado" value="<?php echo $data['id_empleado']; ?>">

            <div class="modal-body" id="cont_modal">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tipo empleado :</label>
                  <input type="text" name="id_tipo_empleado" class="form-control" value="<?php echo $data['id_tipo_empleado']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Area:</label>
                  <input type="text" name="id_area" class="form-control" value="<?php echo $data['id_area']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombres:</label>
                  <input type="text" name="nombres" class="form-control" value="<?php echo $data['nombres']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Ap. paterno:</label>
                  <input type="text" name="ap" class="form-control" value="<?php echo $data['ap']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Ap. materno:</label>
                  <input type="text" name="am" class="form-control" value="<?php echo $data['am']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Cedula:</label>
                  <input type="text" name="ci" class="form-control" value="<?php echo $data['ci']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono:</label>
                  <input type="text" name="tel_fijo" class="form-control" value="<?php echo $data['tel_fijo']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Telefono celular:</label>
                  <input type="text" name="tel_cel" class="form-control" value="<?php echo $data['tel_cel']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Direccion:</label>
                  <input type="text" name="direccion" class="form-control" value="<?php echo $data['direccion']; ?>" required="true">
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