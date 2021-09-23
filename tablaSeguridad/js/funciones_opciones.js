function agregardatosOpcion(id_grupo, nombre, op_url, mostrar, orden) {

    cadena = "&id_grupo=" + id_grupo +
        "&nombre=" + nombre +
        "&op_url=" + op_url +
        "&mostrar=" + mostrar +

        "&orden=" + orden;

    $.ajax({
        type: "POST",
        url: "php/agregarDatos_opcion.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_opcion.php');
                //$('#buscador').load('componentes/buscador_opcion.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformOpcion(datos) {

    d = datos.split('||');
    $('#id_opcionu').val(d[0]);

    $('#id_grupou').val(d[1]);
    $('#opcionu').val(d[2]);
    $('#contenodou').val(d[3]);
    $('#mostraru').val(d[4]);

    $('#ordenu').val(d[5]);



}

function actualizaDatosOpcion() {

    id_opcion = $('#id_opcionu').val();

    id_grupo = $('#id_grupou').val();
    nombre = $('#opcionu').val();
    op_url = $('#contenidou').val();
    mostrar = $('#mostraru').val();

    orden = $('#ordenu').val();


    cadena =
        "id_opcion=" + id_opcion +
        "&id_grupo=" + id_grupo +
        "&nombre=" + nombre +
        "&op_url=" + op_url +
        "&mostrar=" + mostrar +

        "&orden=" + orden;


    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_opcion.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_opcion.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoOpcion(id_opcion) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosOpcion(id_opcion) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosOpcion(id_opcion) {

    cadena = "id_opcion=" + id_opcion;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_opcion.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_opcion.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}