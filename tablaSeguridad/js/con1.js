"use strict"

function validar() {

    var ci = document.form1.ci.value;
    var nombres = document.form1.nombres.value;
    var ap = document.form1.ap.value;
    var am = document.form1.am.value;
    var telefono = document.form1.telefono.value;
    var direccion = document.form1.direccion.value;


    if ((ci == "")) {

        alert("El ci de la persona es incorrecto o el campo esta vacio");
        document.form1.ci.focus();
        return;
    }

    if ((!v1.test(nombres)) || (nombres == "")) {

        alert("El nombre de la persona es incorrecto o el campo esta vacio");
        document.form1.nombres.focus();
        return;
    }
    if ((!v1.test(ap)) || (ap == "")) {

        alert("El apellido paterno es incorrecto o el campo esta vacio");
        document.form1.ap.focus();
        return;
    }
    if ((!v1.test(am)) || (am == "")) {

        alert("El apellido materno de la persona es incorrecto o el campo esta vacio");
        document.form1.am.focus();
        return;
    }
    if ((telefono == "")) {

        alert("El telefono de la persona es incorrecto o el campo esta vacio");
        document.form1.telefono.focus();
        return;
    }
    if ((!v1.test(direccion)) || (direccion == "")) {

        alert("La direccion de la persona es incorrecto o el campo esta vacio");
        document.form1.direccion.focus();
        return;
    }
    document.form1.submit();
}