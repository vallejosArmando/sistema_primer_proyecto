"use strict"

function validar() {
    var telefono = document.form1.telefono.value;
    var id_empleado = document.form1.id_empleado.value;

    if ((telefono == "")) {
        alert("El numero de telefono es incorrecto o el campo esta vacio");
        document.form1.telefono.focus();
        return;

    }
    if (id_empleado == "") {
        alert("El id del empleado es incorrecto o el campo esta vacio");
        document.form1.id_empleado.focus();
        return;

    }
    document.form1.submit();
};