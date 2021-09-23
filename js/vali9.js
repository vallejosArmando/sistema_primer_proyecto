"use strict"

function validar() {
    var nombres = document.form1.nombres.
    value;
    var ap = document.form1.ap.value;
    var am = document.form1.am.value;
    var ci = document.form1.ci.value;
    var fecha_inicio = document.form1.fecha_inicio.value;
    var id_area = document.form1.id_area.value;


    if ((!v1.test(nombres)) || (nombres == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form1.nombres.focus();
        return;
    }
    if ((!v1.test(ap)) || (ap == "")) {
        alert("El valor de ap  es incorrectos o el campo esta vacio");
        document.form1.ap.focus();
        return;
    }
    if ((!v1.test(am)) || (am == "")) {
        alert("El valor de am  es incorrectos o el campo esta vacio");
        document.form1.am.focus();
        return;
    }


    if ((!v2.test(ci)) || (ci == "")) {
        alert("El ci es incorrectos o el campo esta vacio");
        document.form1.ci.focus();
        return;
    }
    if (fecha_inicio == "") {
        alert("El valor de fecha de inicio  es incorrectos o el campo esta vacio");
        document.form1.fecha_inicio.focus();
        return;
    }
    if ((!v2.test(id_area)) || (id_area == "")) {
        alert("El id area es incorrectos o el campo esta vacio");
        document.form1.id_area.focus();
        return;
    }

    document.form1.submit();

}