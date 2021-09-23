"use strict"

function validar() {

    var pais = document.form1.pais.value;
    var departamento = document.form1.departamento.value;
    var barrio = document.form1.barrio.value;
    var calle = document.form1.calle.value;
    var entre_que_calles = document.form1.entre_que_calles.value;
    var numero_de_casa = document.form1.numero_de_casa.value;
    var comunidad = document.form1.comunidad.value;
    var id_empleado = document.form1.id_empleado.value;

    if ((!v1.test(pais)) || (pais == "")) {

        alert("El pais es incorrecto o el campo esta vacio");
        document.form1.pais.focus();
        return;
    }

    if ((!v1.test(departamento)) || (departamento == "")) {
        alert("El departamento es incorrecto o el campo esta vacio");
        document.form1.departamento.focus();
        return;
    }

    if ((barrio == "")) {
        alert("El barrio es incorrecto o el campo esta vacio");
        document.form1.barrio.focus();
        return;
    }

    if (calle == "") {
        alert("La calle es incorrecto o el campo esta vacio");
        document.form1.calle.focus();
        return;
    }

    if (entre_que_calles == "") {
        alert("La direccion entre que calles es incorrecto o el campo esta vacio");
        document.form1.entre_que_calles.focus();
        return;
    }

    if ((numero_de_casa == "")) {
        alert("El numero de casa es incorrecto o el campo esta vacio");
        document.form1.numero_de_casa.focus();
        return;
    }

    if ((comunidad == "")) {
        alert("La comunidad es incorrecto o el campo esta vacio");
        document.form1.comunidad.focus();
        return;
    }
    if ((id_empleado == "")) {
        alert("El id del empleado es incorrecto o el campo esta vacio");
        document.form1.id_empleado.focus();
        return;
    }
    document.form1.submit();
};