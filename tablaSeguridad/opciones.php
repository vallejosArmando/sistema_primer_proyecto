
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
        <h4 class="modal-title" id="myModalLabel">Agrega nueva opcion</h4>
      </div>
      <div class="modal-body">

      <label>Seleccione Grupo</label>

      <select name="id_grupo" id="id_grupo" class="form-control input-sm" >
          <option value="">Grupo</option>
          <?php 
        require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM grupos");
while ($grupos=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $grupos[0]?>"><?php echo $grupos[1] ?></option> <?php } ?>  
      </select>
  
            <div id="op0" class="errores">  Dame grupo.</div>

        
          

        	<label>Nombre Sub Menu</label>
        	<input type="text" name="nombre" id="nombre" class="form-control input-sm">
          <div id="op1" class="errores">  Dame nombre.</div>

        	<label>Sub Menu URL.</label>
        	<input type="text" name="op_url" id="op_url" class="form-control input-sm">
          <div id="op2" class="errores">  Dame contenido.</div>

        	<label>Mostrar</label>
          <select name="mostrar" id="mostrar" class="form-control input-sm">

          <option value="">mostrar</option>
          <option value="si">si</option>
          <option value="no">no</option>
          </select>
          <div id="op3" class="errores">  Dame mostrar.</div>

            <label>Orden</label>
        	<input type="number" name="orden" id="orden" class="form-control input-sm">
          <div id="op4" class="errores">  Dame orden.</div>

        
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
          <label >id_opcion</label>
      <input type="text" hidden="" name="id_opcionu" id="id_opcionu" class="form-control input-sm">

      <label>Grupo</label>

      <select name="id_grupou" id="id_grupou" class="form-control input-sm" >
          <option value="">id_grupo</option>
          <?php 
        require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM grupos");
while ($grupos=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $grupos[0]?>"><?php echo $grupos[1] ?></option> <?php } ?>  
      </select>
  
        
          <label>Nombre</label>
        	<input type="text" name="opcionu" id="opcionu" class="form-control input-sm">
        	<label>Url</label>
        	<input type="text" name="contenidou" id="contenidou" class="form-control input-sm">
          <label>Mostrar</label>
          <select name="mostraru" id="mostraru"  class="form-control input-sm">
            <option value="">Mostrar</option>
            <option value="si">si</option>
            <option value="no">no</option>
          </select>
            <label>Orden</label>
        	<input type="number" name="ordenu" id="ordenu" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<?php require 'thefott.php' ?>
<script src="js/funciones_opciones.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_opcion.php');
    //$('#buscador').load('componentes/buscador_opcion.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
            
          id_grupo=$('#id_grupo').val();
          nombre=$('#nombre').val();
          op_url=$('#op_url').val();
          mostrar=$('#mostrar').val();
          orden=$('#orden').val();

          if ( (id_grupo == "")) {
         $('#op0').fadeIn("slow");
         return false;
      }else{
        $('#op0').fadeOut();
      }
      if ((nombre == "")) {
        $('#op1').fadeIn("slow");
        return false;
      }else{
        $('#op1').fadeOut();
      }
      if ((op_url == "")) {
      $('#op2').fadeIn("slow");
      return false;
      }else{
        $('#op2').fadeOut();
      }

      if ((mostrar == "")) {
      $('#op3').fadeIn("slow");
      return false;
      }else{
        $('#op3').fadeOut();
      }
      if ((orden == "")) {
       $('#op4').fadeIn("slow");
       return false;
      }else{
        $('#op4').fadeOut();
      }
          return agregardatosOpcion(id_grupo,nombre,op_url,mostrar,orden);
        });



        $('#actualizadatos').click(function(){
          actualizaDatosOpcion();
        });

    });
</script>