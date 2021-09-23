function agregardatosAcc(id_grupo, id_opcion, id_rol, permisos) {

    cadena = "&id_grupo=" + id_grupo + "&id_opcion=" + id_opcion +
        "&id_rol=" + id_rol + "&permisos=" + permisos;



    $.ajax({
        type: "POST",
        url: "php/agregarDatos_acc.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla_acc.php');
                //$('#buscador').load('componentes/buscador_acc.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformAcc(datos) {

    d = datos.split('||');
    $('#id_accesou').val(d[0]);
    $('#id_grupou').val(d[1]);

    $('#id_opcionuu').val(d[2]);

    $('#id_roluuu').val(d[3]);
    $('#permisou').val(d[4]);




}

function actualizaDatosAcc() {

    id_acceso = $('#id_accesou').val();
    id_grupo = $('#id_grupou').val();

    id_opcion = $('#id_opcionuu').val();
    id_rol = $('#id_roluuu').val();
    permisos = $('#permisosu').val();


    cadena =
        "id_acceso=" + id_acceso +
        "&id_grupo=" + id_grupo +

        "&id_opcion=" + id_opcion +
        "&id_rol=" + id_rol +
        "&permisos=" + permisos;



    $.ajax({
        type: "POST",
        url: "php/actualizaDatos_acc.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tabla_acc.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoAcc(id_acceso) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosAcc(id_acceso) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatosAcc(id_acceso) {

    cadena = "id_acceso=" + id_acceso;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos_acc.php",
        data: cadena,
        success: function(ru) {
            if (ru == 1) {
                $('#tabla').load('componentes/tabla_acc.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}