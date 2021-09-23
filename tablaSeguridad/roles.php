<?php require_once "thead.php" ?>

<?php require_once "../menu.php" ?>

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo rol</h4>
      </div>
      <div class="modal-body">

      <label>Rol</label>
        	<input type="text" name="rol" id="rol" class="form-control input-sm">
          <div id="rol1" class="errores">  Dame rol.</div>
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_rol">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <label >id_rol</label>
      <input type="text" hidden="" name="id_rolu" id="id_rolu" class="form-control input-sm">

        
         
        	<label>Rol</label>
        	<input type="text" name="rolu" id="rolu" class="form-control input-sm">
         


      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos_rol" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<?php require 'thefott.php' ?>
<script src="js/funciones_roles.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_roles.php');
    //$('#buscador').load('componentes/buscador_usuario.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo_rol').click(function(){
          rol=$('#rol').val();
           if (!v1.test(rol) || (rol == "")) {
           $('#rol1').fadeIn("slow");
           return false;
         } else {
           $('#rol1').fadeOut();
         }
      
          return agregardatosRoles(rol);
        });



        $('#actualizadatos_rol').click(function(){
          actualizaDatosRoles();
        });

    });
</script>