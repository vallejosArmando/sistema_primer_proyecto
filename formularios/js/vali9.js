"use strict"

function validar() {
    var id_tipo_empleado = document.form1.id_tipo_empleado.value;
    var id_area = document.form1.id_area.value;
    var nombres = document.form1.nombres.value;
    var ap = document.form1.ap.value;
    var am = document.form1.am.value;
    var ci = document.form1.ci.value;
    var tel_fijo = document.form1.tel_fijo.value;
    var tel_cel = document.form1.tel_cel.value;
    var direccion = document.form1.direccion.value;


    if ((!v2.test(id_tipo_empleado)) || (id_tipo_empleado == "")) {
        alert("El id tipo empleado es incorrectos o el campo esta vacio");
        document.form1.id_tipo_empleado.focus();
        return;
    }

    if ((!v2.test(id_area)) || (id_area == "")) {
        alert("El id area es incorrectos o el campo esta vacio");
        document.form1.id_area.focus();
        return;
    }

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
    if (tel_fijo == "") {
        alert("El valor del telefono  es incorrectos o el campo esta vacio");
        document.form1.tel_fijo.focus();
        return;
    }
    if (tel_cel == "") {
        alert("El valor del celular es incorrectos o el campo esta vacio");
        document.form1.tel_cel.focus();
        return;
    }
    if (direccion == "") {
        alert("El valor de la direccion  es incorrectos o el campo esta vacio");
        document.form1.direccion.focus();
        return;
    }


    document.form1.submit();

}