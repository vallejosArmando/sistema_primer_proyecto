


//$(document).ready(function() {
//    $('#search').keyup(function(e) {
//        e.preventDefault();
//        let data = $('#form').serializeArray();
//
//        $.post({
//            url: 'buscar_empleados.php',
//            data: data,
//            success: function(response) {
//                $('#response').html(response);
//            }
//        })
//    })
//});



//$(document).ready(function() {
//    $('#search').keyup(function(e) {
//        e.preventDefault();
//        let data = $('#form').serializeArray();
//
//        $.post({
//            url: 'buscar_empleados.php',
//            data: data,
//            success: function(response) {
//                $('#response').html(response);
//            }
//        })
//    })
//});



$(document).ready(function() {
    $('#id_area').select2();

    $('#id_area').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#id_area').val(),
            url: 'session.php',
            success: function(r) {
                $('#tabla').load('tabla_em.php');
            }
        });
    });
});



$(document).ready(function() {
    $('#nombres').select2();

    $('#nombres').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#nombres').val(),
            url: 'session.php',
            success: function(r) {

                $('#tabla').load('tabla_em.php');
            }
        });
    });
});



$(document).ready(function() {
    $('#ap').select2();

    $('#ap').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#ap').val(),
            url: 'session.php',
            success: function(r) {
                $('#tabla').load('tabla_em.php');
            }
        });
    });
});
	

$(document).ready(function(){
		
	readProducts(); /* it will load products when document loads */
	
	$(document).on('click', '#delete', function(e){
		
		var id_empleado = $(this).data('id');
		SwalDelete(id_empleado);
		e.preventDefault();
	});
	
});

function SwalDelete(id_empleado){
	
	swal({
		title: 'Estas seguro?',
		text: "Se borrará de forma permanente!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, bórralo!',
		showLoaderOnConfirm: true,
		  
		preConfirm: function() {
		  return new Promise(function(resolve) {
			   
			 $.ajax({
				   url: 'eliminar_empleado.php',
				type: 'POST',
				   data: 'id_empleado='+id_empleado,
				   dataType: 'json'
			 })
			 .done(function(response){
				 swal('Eliminado!', response.message, response.status);
				readProducts();
			 })
			 .fail(function(){
				 swal('Oops...', 'No se puede eliminar por que esta en uso:!', 'question');
			 });
		  });
		},
		allowOutsideClick: false			  
	});	
	
}

function readProducts(){
	$('#tabla').load('tabla_em.php');	
}

///////// jefes_areas////////////////////////////////

$(document).ready(function() {
    $('#nombre').select2();

    $('#nombre').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#nombre').val(),
            url: 'sessiont.php',
            success: function(r) {
                $('#tablas').load('t_jefe_areas.php');
            }
        });
    });
});



$(document).ready(function() {
    $('#nombres').select2();

    $('#nombres').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#nombres').val(),
            url: 'sessiont.php',
            success: function(r) {

                $('#tablas').load('t_jefe_areas.php');
            }
        });
    });
});



$(document).ready(function() {
    $('#ap').select2();

    $('#ap').change(function() {
        $.ajax({
            type: "post",
            data: 'valor=' + $('#ap').val(),
            url: 'session.php',
            success: function(r) {
                $('#tablas').load('t_jefe_areas.php');
            }
        });
    });
});
	

$(document).ready(function(){
		
	readProducts(); /* it will load products when document loads */
	
	$(document).on('click', '#delete', function(e){
		
		var id_empleado = $(this).data('id');
		SwalDelete(id_empleado);
		e.preventDefault();
	});
	
});

function SwalDelete(id_empleado){
	
	swal({
		title: 'Estas seguro?',
		text: "Se borrará de forma permanente!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Si, bórralo!',
		showLoaderOnConfirm: true,
		  
		preConfirm: function() {
		  return new Promise(function(resolve) {
			   
			 $.ajax({
				   url: 'eliminar_empleado.php',
				type: 'POST',
				   data: 'id_empleado='+id_empleado,
				   dataType: 'json'
			 })
			 .done(function(response){
				 swal('Eliminado!', response.message, response.status);
				readProducts();
			 })
			 .fail(function(){
				 swal('Oops...', 'No se puede eliminar por que esta en uso:!', 'question');
			 });
		  });
		},
		allowOutsideClick: false			  
	});	
	
}

function readProducts(){
	$('#tablas').load('t_jefe_areas.php');	
}