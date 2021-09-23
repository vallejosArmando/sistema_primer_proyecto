"use strict"

function validar() {

    var estado_reclamo = document.form1.estado_reclamo.value;
    var fecha = document.form1.fecha.value;

    var id_sistema_reclamo = document.form1.id_sistema_reclamo.value;
    var id_usuario_cosaalt = document.form1.id_usuario_cosaalt.value;


    if ((!v1.test(estado_reclamo)) || (estado_reclamo == "")) {
        alert("No hay estado o el campo esta vacio ");
        document.form1.estado_reclamo.focus();
        return;

    }
    if ((fecha == "")) {
        alert("la fecha es incorrecta  o el campo esta vacio");
        document.form1.fecha.focus();
        return;
    }

    if (id_sistema_reclamo == "") {
        alert("La clave id_sistema es incorrecta  o el campo esta vacio");
        document.form1.id_sistema_reclamo.focus();
        return;
    }
    if (id_usuario_cosaalt == "") {
        alert("La clave id_usuario es incorrecta o el campo esta vacio ");
        document.form1.id_usuario_cosaalt.focus();
        return;

    }
    document.form1.submit();
}