function agregardatosUr(id_usuario, id_rol) {

    cadena = "&id_usuario=" + id_usuario +
        "&id_rol=" + id_rol;



    $.ajax({
        type: "POST",
        url: "php/agregarDatos_ur.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_ur.php');
                //$('#buscador').load('componentes/buscador_ur.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformUr(datos) {

    d = datos.split('||');
    $('#id_usuario_roluu').val(d[0]);

    $('#id_usroluu').val(d[1]);

    $('#id_roluu').val(d[2]);



}

function actualizaDatosUr() {

    id_usuario_rol = $('#id_usuario_roluu').val();

    id_usuario = $('#id_usroluu').val();
    id_rol = $('#id_roluu').val();



    cadena =
        "id_usuario_rol=" + id_usuario_rol +
        "&id_usuario=" + id_usuario +
        "&id_rol=" + id_rol;


    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_ur.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_ur.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoUr(id_usuario_rol) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosUr(id_usuario_rol) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosUr(id_usuario_rol) {

    cadena = "id_usuario_rol=" + id_usuario_rol;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_ur.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_ur.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}