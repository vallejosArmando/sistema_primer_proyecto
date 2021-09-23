"use strict"

function validar() {
    var hora_entrada = document.form1.hora_entrada.
    value;
    var hora_salida = document.form1.hora_salida.value;
    var dias = document.form1.dias.value;
    var id_plomero = document.form1.id_plomero.value;


    if ((hora_entrada == "")) {
        alert("El valor de hora_entrada es incorrecto o el campo esta vacio ");
        document.form1.hora_entrada.focus();
        return;
    }
    if ((hora_salida == "")) {
        alert("El valor de hora_salida es incorrecto o el campo esta vacio ");
        document.form1.hora_salida.focus();
        return;
    }
    if ((!v2.test(dias)) || (dias == "")) {
        alert("El valor de dias es incorrecto o el campo esta vacio ");
        document.form1.dias.focus();
        return;
    }
    if (id_plomero == "") {
        alert("El valor de dias es incorrecto o el campo esta vacio ");
        document.form1.id_plomero.focus();
        return;
    }
    document.form1.submit();

}