

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
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Grupo</h4>
      </div>
      <div class="modal-body">

      <label>Grupo</label>
        	<input type="text" name="grupo" id="grupo" class="form-control input-sm">
          <div id="gru1" class="errores">  Dame grupo.</div>

          <label>Icono</label>

          <input type="text" name="icono" id="icono" class="form-control input-sm">
          <div id="gru2" class="errores">  Dame Icono.</div>


        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
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
          <label >id_grupo</label>
      <input type="text" hidden="" name="id_grupou" id="id_grupou" class="form-control input-sm">

        
         
        	<label>Grupo</label>
        	<input type="text" name="grupou" id="grupou" class="form-control input-sm">
        	<label>Icono</label>
        	<input type="text" name="iconou" id="iconou" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
<?php require 'thefott.php'; ?>
<script src="js/funciones_grupo.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_gr.php');
    //$('#buscador').load('componentes/buscador_usuario.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          grupo=$('#grupo').val();
          icono=$('#icono').val();

         if (grupo=="") {
          $("#gru1").fadeIn("slow");
                    return false;
                }
                else {
                    $("#gru1").fadeOut();
                }
                if (icono=="") {
          $("#gru2").fadeIn("slow");
                    return false;
                }
                else {
                    $("#gru2").fadeOut();
                }
      

           return agregardatosgr(grupo,icono);
        });



        $('#actualizadatos').click(function(){
          actualizaDatosgr();
        });

    });
</script>