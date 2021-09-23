"use strict"

function validar() {
    var nombres = document.form1.nombres.
    value;
    var ap = document.form1.ap.value;
    var am = document.form1.am.value;
    var ci = document.form1.ci.value;
    var id_area = document.form1.id_area.value;



    if ((!v1.test(nombres)) || (nombres == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form1.nombres.focus();
        return;
    }
    if ((!v1.test(ap)) || (ap == "")) {
        alert("El apellido  es incorrrectos o el campo esta vacio");
        document.form1.ap.focus();
        return;
    }
    if ((!v1.test(am)) || (am == "")) {
        alert("El apellido  es incorrrectos o el campo esta vacio");
        document.form1.am.focus();
        return;
    }

    if ((!v22.test(ci)) || (ci == "")) {
        alert("El ci es incorrectos o el campo esta vacio");
        document.form1.ci.focus();
        return;
    }
    if (id_area == "") {
        alert("El id de area es incorrecto o el campo esta vacio");
        document.form1.id_area.focus();
        return;
    }

    document.form1.submit();

}