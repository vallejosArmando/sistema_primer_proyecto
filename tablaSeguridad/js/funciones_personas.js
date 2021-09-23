function agregardatosper(ci, nombres, ap, am, telefono, direccion, genero) {

    cadena =
        "&ci=" + ci +

        "&nombres=" + nombres +
        "&ap=" + ap +
        "&am=" + am +
        "&telefono=" + telefono +
        "&direccion=" + direccion +
        "&genero=" + genero;



    $.ajax({
        type: "POST",
        url: "php/agregarDatosper.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tablaper.php');
                //$('#buscador').load('componentes/buscador.php');//
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });


}

function agregaformper(datos) {

    d = datos.split('||');
    $('#id_personau').val(d[0]);
    $('#ciu').val(d[1]);
    $('#nombresu').val(d[2]);
    $('#apu').val(d[3]);
    $('#amu').val(d[4]);
    $('#telefonou').val(d[5]);
    $('#direccionu').val(d[6]);
    $('#generou').val(d[7]);



}

function agregaformperficha(datos) {

    d = datos.split('||');
    $('#id_personauu').val(d[0]);
    $('#ciuu').val(d[1]);
    $('#nombresuu').val(d[2]);
    $('#apuu').val(d[3]);
    $('#amuu').val(d[4]);
    $('#telefonouu').val(d[5]);
    $('#direccionuu').val(d[6]);
    $('#generouu').val(d[7]);



}



function actualizaDatosper() {


    id_persona = $('#id_personau').val();
    ci = $('#ciu').val();
    nombres = $('#nombresu').val();
    ap = $('#apu').val();
    am = $('#amu').val();
    telefono = $('#telefonou').val();
    direccion = $('#direccionu').val();
    genero = $('#generou').val();



    cadena = "id_persona=" + id_persona +
        "&ci=" + ci +
        "&nombres=" + nombres +
        "&ap=" + ap +
        "&am=" + am +
        "&telefono=" + telefono +
        "&direccion=" + direccion +
        "&genero=" + genero;



    $.ajax({
        type: "POST",
        url: "php/actualizaDatosper.php",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                $('#tabla').load('componentes/tablaper.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNoper(id_persona) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatosper(id_persona) },
        function() { alertify.error('Se cancelo') });
}


function eliminarDatosper(id_persona) {

    cadena = "id_persona=" + id_persona;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatosper.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tablaper.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}