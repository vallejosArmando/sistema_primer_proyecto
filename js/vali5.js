"use strict"

function validar() {
    var nombres = document.form1.nombres.value;
    var apellidos = document.form1.apellidos.value;
    var telefonos = document.form1.telefonos.value;
    var id_sistema_reclamo = document.form1.id_sistema_reclamo.value;



    if ((!v1.test(nombres)) || (nombres == "")) {
        alert("El nombre es incorrecto o el campo esta vacio ");
        document.form1.nombres.focus();
        return;
    }
    if ((!v1.test(apellidos)) || (apellidos == "")) {
        alert("los apellidos son incorrrectos o el campo esta vacio");
        document.form1.apellidos.focus();
        return;
    }
    if ((!v2.test(telefonos)) || (telefonos == "")) {
        alert("El telefono es incorrecto o el campo esta vacio ");
        document.form1.telefonos.focus();
        return;
    }
    if (id_sistema_reclamo == "") {
        alert("El id del sistema de reclamos son incorrrectos o el campo esta vacio");
        document.form1.id_sistema_reclamo.focus();
        return;
    }

    document.form1.submit();
}