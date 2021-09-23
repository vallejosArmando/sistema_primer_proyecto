function agregardatosUsuario(id_persona, nom_usuario, clave, ) {

    cadena = "&id_persona=" + id_persona +
        "&nom_usuario=" + nom_usuario +
        "&clave=" + clave;







    $.ajax({
        type: "POST",
        url: "php/agregarDatos_usuario.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_usuario.php');
                //$('#buscador').load('componentes/buscador_usuario.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformUsuario(datos) {

    d = datos.split('||');
    $('#id_usuariou').val(d[0]);

    $('#id_personau').val(d[1]);
    $('#nom_usuariou').val(d[2]);
    $('#claveu').val(d[3]);



}

function actualizaDatosUsuario() {

    id_usuario = $('#id_usuariou').val();

    id_persona = $('#id_personau').val();
    nom_usuario = $('#nom_usuariou').val();
    clave = $('#claveu').val();



    cadena =
        "id_usuario=" + id_usuario +
        "&id_persona=" + id_persona +
        "&nom_usuario=" + nom_usuario +
        "&clave=" + clave;


    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_usuario.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_usuario.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoUsuario(id_usuario) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosUsuario(id_usuario) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosUsuario(id_usuario) {

    cadena = "id_usuario=" + id_usuario;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_usuario.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_usuario.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}