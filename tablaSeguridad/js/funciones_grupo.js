function agregardatosgr(grupo, icono) {

    cadena = "&grupo=" + grupo +
        "&icono=" + icono;
    $.ajax({
        type: "POST",
        url: "php/agregarDatos_gr.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_gr.php');
                //$('#buscador').load('componentes/buscador_usuario.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformgr(datos) {

    d = datos.split('||');
    $('#id_grupou').val(d[0]);

    $('#grupou').val(d[1]);
    $('#iconou').val(d[2]);





}

function actualizaDatosgr() {

    id_grupo = $('#id_grupou').val();

    grupo = $('#grupou').val();
    icono = $('#iconou').val();





    cadena =
        "id_grupo=" + id_grupo +
        "&grupo=" + grupo +
        "&icono=" + icono;




    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_gr.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_gr.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNogr(id_grupo) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosgr(id_grupo) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosgr(id_grupo) {

    cadena = "id_grupo=" + id_grupo;


    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_gr.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_gr.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}