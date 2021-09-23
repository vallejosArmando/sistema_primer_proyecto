<div class="modal fade" id="editChildresn<?php echo $data['id_area']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header" style="background-color: #563d7c !important;">
        <h3 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Area
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            

      <form  method="POST" action="controlador_area.php"  >
        <input type="hidden" name="id_area" value="<?php echo $data['id_area']; ?>">

            <div class="modal-body" id="cont_modal">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tipo empleado :</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Area:</label>
                  <input type="text" name="descripcion" class="form-control" value="<?php echo $data['descripcion']; ?>" required="true">
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
