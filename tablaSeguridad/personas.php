

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
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
          
          <label  >ci.</label>
        	<input type="text" name="ci" id="ci" class="form-control input-sm ">
          <div id="ci1" class="errores">  Dame tu ci.</div>
      
      

        	<label>Nombre</label>
        	<input type="text" name="nombres" id="nombres" class="form-control input-sm">
          <div id="nom2" class="errores"> Dame tu nombre.</div>


        	<label>Ap_paterno</label>
        	<input type="text" name="ap" id="ap" class="form-control input-sm">
          <div id="ap3" class="errores"> Dame tu ap_paterno.</div>


        	<label>Ap_materno</label>
        	<input type="text" name="am" id="am" class="form-control input-sm">
          <div id="am4" class="errores"> Dame tu ap_materno.</div>


          <label>Telefono</label>
        	<input type="text" name="telefono" id="telefono" class="form-control input-sm">
          <div id="tel5" class="errores"> Dame tu telefono</div>

          <label>Direccion</label>
        	<input type="text" name="direccion" id="direccion" class="form-control input-sm">
          <div id="dir6" class="errores"> Dame tu direcion.</div>

          <label>Genero</label>
        	<input type="text" name="genero" id="genero" class="form-control input-sm">
          <div id="dir7" class="errores"> Dame tu genero.</div>
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-primary"  data-dismiss="modal" id="guardarnuevoper" >Agregar</button>
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

          <label for="">id_persona</label>
      <input type="text" hidden="" name="id_personau" id="id_personau" class="form-control input-sm">
      <div id="n" class="errores">  Dame id_persona.</div>

        	

          <label>ci.</label>
        	<input type="text" name="ciu" id="ciu" class="form-control input-sm">
          <div id="n3" class="errores">  Dame ci.</div>

        	<label>Nombre</label>
        	<input type="text" name="nombresu" id="nombresu" class="form-control input-sm">
          <div id="n4" class="errores">  Dame nombre.</div>

        	<label>Ap_paterno</label>
        	<input type="text" name="apu" id="apu" class="form-control input-sm">
          <div id="n5" class="errores">  Dame ap.</div>

        	<label>Ap_materno</label>
        	<input type="text" name="amu" id="amu" class="form-control input-sm">
          <div id="n6" class="errores">  Dame am.</div>

          <label>Telefono</label>
        	<input type="text" name="telefonou" id="telefonou" class="form-control input-sm">
          <div id="n7" class="errores">  Dame telefono.</div>

          <label>Direccion</label>
        	<input type="text" name="direccionu" id="direccionu" class="form-control input-sm">
          <div id="n8" class="errores">  Dame direccion.</div>
          <label>Genero</label>
        	<input type="text" name="generou" id="generou" class="form-control input-sm">
          <div id="n9" class="errores">  Dame genero.</div>

      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-warning" id="actualizadatosper" data-dismiss="modal">Actualizar</button>
        
      </div>
      
    </div>
    
  </div>

</div>
<!-- Modal para ficha de datos -->

<div class="modal fade" id="modalEdicionficha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ficha tecnica de Personas</h4>
      </div>
      <div class="modal-body">

          <label for="">id_persona</label>
      <input type="text" hidden="" name="id_personauu" id="id_personauu" class="form-control input-sm">
      <div id="n" class="errores">  Dame id_persona.</div>

        	

          <label>ci.</label>
        	<input type="text" name="ciuu" id="ciuu" class="form-control input-sm">
          <div id="n3" class="errores">  Dame ci.</div>

        	<label>Nombre</label>
        	<input type="text" name="nombresuu" id="nombresuu" class="form-control input-sm">
          <div id="n4" class="errores">  Dame nombre.</div>

        	<label>Ap_paterno</label>
        	<input type="text" name="apuu" id="apuu" class="form-control input-sm">
          <div id="n5" class="errores">  Dame ap.</div>

        	<label>Ap_materno</label>
        	<input type="text" name="amuu" id="amuu" class="form-control input-sm">
          <div id="n6" class="errores">  Dame am.</div>

          <label>Telefono</label>
        	<input type="text" name="telefonouu" id="telefonouu" class="form-control input-sm">
          <div id="n7" class="errores">  Dame telefono.</div>

          <label>Direccion</label>
        	<input type="text" name="direccionuu" id="direccionuu" class="form-control input-sm">
          <div id="n8" class="errores">  Dame direccion.</div>
          <label>Genero</label>
        	<input type="text" name="generouu" id="generouu" class="form-control input-sm">
          <div id="n9" class="errores">  Dame genero.</div>

      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>

      <button onclick="window.print();" class="btn btn-primary" id="print-btn">Imprimir</button>


      </div>
      
    </div>
    
  </div>

</div>
<?php require 'thefott.php' ?>
<script src="js/funciones_personas.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tablaper.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevoper').click(function(){

          id_sistema_reclamo=$('#id_sistema_reclamo').val();
    ci=$('#ci').val();
    nombres=$('#nombres').val();
    ap=$('#ap').val();
    am=$('#am').val();
    telefono=$('#telefono').val();
    direccion=$('#direccion').val();
    genero=$('#genero').val();


    if (ci == "") {
                    $("#ci1").fadeIn("slow");
                    return false;
                }
                else {
                    $("#ci1").fadeOut();
                }
                if ((!v1.test(nombres)) || (nombres == "")) {
                $("#nom2").fadeIn("slow");
                    return false;
                }
                else {
                    $("#nom2").fadeOut();
                }
                if ((!v1.test(ap)) || (ap == "")) {
                    $("#ap3").fadeIn("slow");
                    return false;
                }
                else {
                    $("#ap3").fadeOut();
                }
                if ((!v1.test(am)) || (am == "")) {
                    $("#am4").fadeIn("slow");
                    return false;
                }
                else {
                    $("#am4").fadeOut();
                }
                if ((!v2.test(telefono)) || (telefono == "")) {
                    $("#tel5").fadeIn("slow");
                    return false;
                }
                else {
                    $("#tel5").fadeOut();
                }
                if ((!v1.test(direccion)) || (direccion == "")) {
                    $("#dir6").fadeIn("slow");
                    return false;
                }
                else {
                    $("#dir6").fadeOut();
                }
                if ((!v1.test(genero)) || (genero == "")) {
                    $("#dir7").fadeIn("slow");
                    return false;
                }
                else {
                    $("#dir7").fadeOut();
                }
          return agregardatosper(ci,nombres,ap,am,telefono,direccion,genero);  
                
        });

        $('#actualizadatosper').click(function(){
       
          
           actualizaDatosper();
        });
        
        $('#actualizadatosperficha').click(function(){
       
          
       actualizaDatosperficha();
    });
     

      

    });
</script>
