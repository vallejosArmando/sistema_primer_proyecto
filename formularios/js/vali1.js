"use strict"

function validar() {

    var nombre = document.form1.nombre.value;
    var nombre_creador = document.form1.nombre_creador.value;
    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El nombre del sistema es incorrecto o el campo esta vacio");
        document.form1.nombre.focus();
        return;
    }
    if ((!v1.test(nombre_creador)) || (nombre_creador == "")) {
        alert("El nombre del creador del sistema es incorrecto o el campo esta vacio");
        document.form1.nombre_creador.focus();
        return;
    }

    document.form1.submit();
}