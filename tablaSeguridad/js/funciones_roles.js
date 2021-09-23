function agregardatosRoles(rol) {

    cadena = "&rol=" + rol;



    $.ajax({
        type: "POST",
        url: "php/agregarDatos_roles.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_roles.php');
                //$('#buscador').load('componentes/buscador_usuario.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformRoles(datos) {

    d = datos.split('||');
    $('#id_rolu').val(d[0]);

    $('#rolu').val(d[1]);




}

function actualizaDatosRoles() {

    id_rol = $('#id_rolu').val();

    rol = $('#rolu').val();




    cadena =
        "id_rol=" + id_rol +
        "&rol=" + rol;



    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_roles.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_roles.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoRoles(id_rol) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosRoles(id_rol) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosRoles(id_rol) {

    cadena = "id_rol=" + id_rol;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_roles.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_roles.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}