
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
      <label>Grupo</label>

<select name="id_grupo" id="id_grupo" class="form-control input-sm" >
          <option value="">Grupo</option>
          <?php 
        require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM grupos");
while ($grupos=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $grupos[0]?>"><?php echo $grupos[1]?></option> <?php } ?>  
      </select>
      <div id="idu0" class="errores">  Dame grupo.</div>

        
      <label>Opciones</label>

<select name="id_opcion" id="id_opcion" class="form-control input-sm" >
          <option value="">Opcion</option>
          <?php 
        require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM opciones");
while ($opciones=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $opciones[0]?>"><?php echo $opciones[2]?></option> <?php } ?>  
      </select>
      <div id="idu1" class="errores">  Dame opcion.</div>
      <label>Rol</label>

<select name="id_rol" id="id_rol" class="form-control input-sm" >
          <option value="">Rol</option>
          <?php 
         require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM roles");
while ($roles=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $roles[0]?>"><?php echo $roles[1] ?></option> <?php } ?>  
      </select>
      <div id="idu2" class="errores">  Dame rol.</div>
     
      <label >Permisos</label>
   <select name="permisos" id="permisos" class="form-control input-sm">
   <option selected="">..</option>

   <option value="a">a</option>
   <option value="x">x</option>
   </select>
   <div id="idu3" class="errores">  Dame permiso.</div>
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
          <label >id_acceso</label>
      <input type="text" hidden="" name="id_accesou" id="id_accesou" class="form-control input-sm">

      <label>
      Grupo</label>

<select name="id_grupou" id="id_grupou" class="form-control input-sm" >
          <option value="">Grupo</option>
          <?php 
      require '../conexion.php';


          $v=mysqli_query($con,"SELECT * FROM grupos");
while ($grupos=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $grupos[0]?>"><?php echo $grupos[1] ?></option> <?php } ?>  
      </select>

      <label>Opcion</label>

<select name="id_opcionuu" id="id_opcionuu" class="form-control input-sm" >
          <option value="">Opcion</option>
          <?php 
      require '../conexion.php';


          $v=mysqli_query($con,"SELECT * FROM opciones");
while ($opciones=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $opciones[0]?>"><?php echo $opciones[2] ?></option> <?php } ?>  
      </select>
     
      <label>Roles</label>

<select name="id_roluuu" id="id_roluuu" class="form-control input-sm" >
          <option value="">Rol</option>
          <?php 
     require '../conexion.php';

          $v=mysqli_query($con,"SELECT * FROM roles");
while ($roles=mysqli_fetch_row($v)){ ?>

          <option value="<?php echo $roles[0]?>"><?php echo $roles[1]?></option> <?php } ?>  
      </select>
      <label >Permisos</label>
  
		<select name="permisosu" id="permisosu" class="form-control">
			
		
			<option value="x">x</option>
			<option value="a">a</option>
		</select>
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

<?php require 'thefott.php'; ?>
<script src="js/funciones_accesos.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla_acc.php');
    //$('#buscador').load('componentes/buscador_acc.php');//
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          id_grupo=$('#id_grupo').val();
          id_opcion=$('#id_opcion').val();
          id_rol=$('#id_rol').val();
          permisos=$('#permisos').val();


          if ((id_grupo == "")) {
                    $("#idu0").fadeIn("slow");
                    return false;
                }
                else {
                    $("#idu0").fadeOut();
                }

          if ( (id_opcion == "")) {
                    $("#idu1").fadeIn("slow");
                    return false;
                }
                else {
                    $("#idu1").fadeOut();
                }
                if ( (id_rol == "")) {
                $("#idu2").fadeIn("slow");
                    return false;
                }
                else {
                    $("#idu2").fadeOut();
                }
                if  (permisos == "") {
                $("#idu3").fadeIn("slow");
                    return false;
                }
                else {
                    $("#idu3").fadeOut();
                }
              return agregardatosAcc(id_grupo,id_opcion,id_rol,permisos);
        });



        $('#actualizadatos').click(function(){
          actualizaDatosAcc();
        });

    });
</script>