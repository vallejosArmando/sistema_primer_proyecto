
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
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo usuario_roles</h4>
      </div>
      <div class="modal-body">
        
      <label>Unsuario</label>

<select name="id_usuario" id="id_usuario" class="form-control input-sm" >
          <option value="">Usuario</option>
          <?php 
      
require '../conexion.php';
          $conn=mysqli_query($con,"SELECT * FROM usuarios");
while ($usuarios=mysqli_fetch_row($conn)){ ?>

          <option value="<?php echo $usuarios[0]?>"><?php echo $usuarios[2] ?></option> <?php } ?>  
      </select>
      <div id="ur1" class="errores">  Dame usuario.</div>
      <label>Rol</label>

<select name="id_rol" id="id_rol" class="form-control input-sm" >
          <option value="">Rol</option>
          <?php 
         require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM roles");
while ($roles=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $roles[0]?>"><?php echo $roles[1]?></option> <?php } ?>  
      </select>
      <div id="ur2" class="errores">  Dame rol.</div>
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
          <label >id_usuario_rol</label>
      <input type="text" hidden="" name="id_usuario_roluu" id="id_usuario_roluu" class="form-control input-sm">

      <label>Usuario</label>

<select name="id_usroluu" id="id_usroluu" class="form-control input-sm" >
          <option value="">Usuario</option>
          <?php 
          require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM usuarios where estado=1");
while ($usuarios=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $usuarios[0]?>"><?php echo $usuarios[2] ?></option> <?php } ?>  
      </select>
     
      <label>Rol</label>

<select name="id_roluu" id="id_roluu" class="form-control input-sm" >
          <option value="">Rol</option>
          <?php 
         require '../conexion.php';
          $v=mysqli_query($con,"SELECT * FROM roles where estado=1");
while ($roles=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $roles[0]?>"><?php echo $roles[1]?></option> <?php } ?>  
      </select>
         
        	
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<?php require 'thefott.php' ?>
<script src="js/funciones_usuario_roles.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_ur.php');
    //$('#buscador').load('componentes/buscador_usuario.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          id_usuario=$('#id_usuario').val();
          id_rol=$('#id_rol').val();
          if ((!v2.test(id_usuario)) || (id_usuario == "")) {
          $('#ur1').fadeIn("slow");
          return false;
          }else{
            $('#ur1').fadeOut();
          }
          if ((!v2.test(id_rol)) || (id_rol == "")) {
          $('#ur2').fadeIn("slow");
          return false;
          }else{
            $('#ur2').fadeOut();

          }
         
           return agregardatosUr(id_usuario,id_rol);
        });



        $('#actualizadatos').click(function(){
          actualizaDatosUr();
        });

    });
</script>