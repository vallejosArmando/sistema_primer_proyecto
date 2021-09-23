

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
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo usuario</h4>
      </div>
      <div class="modal-body">

      <label>persona</label>

      <select name="id_persona" id="id_persona" class="form-control input-sm" >
                <option value="">Persona</option>
                <?php 
                     require '../conexion.php';


                $v=mysqli_query($con,"SELECT * FROM personas");
while ($personas=mysqli_fetch_row($v)){ ?>
    
                <option value="<?php echo $personas[0]?>"><?php echo $personas[3]?></option> <?php } ?>  
            </select>
            <div id="ip1" class="errores">  Dame persona.</div>

          

        	<label>Nombre</label>
        	<input type="text" name="nom_usuario" id="nom_usuario" class="form-control input-sm">
          <div id="ip2" class="errores">  Dame nombre.</div>

        	<label>Clave</label>
        	<input type="text" name="clave" id="clave" class="form-control input-sm">
          <div id="ip3" class="errores">  Dame clave.</div>

        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo_us">
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
          <label >Usuario</label>
      <input type="text" hidden="" name="id_usuariou" id="id_usuariou" class="form-control input-sm">

      <label>Persona</label>

<select name="id_personau" id="id_personau" class="form-control input-sm" >
          <option value=""></option>
          <?php 
       require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM personas");
while ($personas=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $personas[0]?>"><?php echo $personas[3] ?></option> <?php } ?>  
      </select>
  
        
          <label>Nombre</label>
        	<input type="text" name="nom_usuariou" id="nom_usuariou" class="form-control input-sm">
        	<label>Clave</label>
        	<input type="text" name="claveu" id="claveu" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos_us" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<?php require 'thefott.php' ?>
<script src="js/funciones_usuario.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_usuario.php');
    //$('#buscador').load('componentes/buscador_usuario.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo_us').click(function(){
          id_persona=$('#id_persona').val();
          nom_usuario=$('#nom_usuario').val();
          clave=$('#clave').val();
      
          if ((!v2.test(id_persona)) || (id_persona == "")) {
           $('#ip1').fadeIn("slow");
           return false;
          }else{
            $('#ip1').fadeOut();
          }
          if ((!v1.test(nom_usuario)) || (nom_usuario == "")){
          $('#ip2').fadeIn("slow");
          return false;
          }else{
            $('#ip2').fadeOut();
          }
          if (clave == "") {
           $('#ip3').fadeIn("slow");
           return false;
          }else{
            $('#ip3').fadeOut();
          }
           return agregardatosUsuario(id_persona,nom_usuario,clave);
        });



        $('#actualizadatos_us').click(function(){
          actualizaDatosUsuario();
        });

    });
</script>