"use strict"

function validar() {
    var hora_entrada = document.form1.hora_entrada.value;
    var hora_salida = document.form1.hora_salida.value;
    var id_empleado = document.form1.hora_salida.value;

    if (hora_entrada == "") {
        alert("El horario de entrada es incorrecto o el campo esta vacio");
        document.form1.hora_entrada.focus();
        return;


    }

    if (hora_salida == "") {
        alert("El horario de salida es incorrecto o el campo esta vacio");
        document.form1.hora_salida.focus();
        return;


    }
    if (id_empleado == "") {
        alert("El id del empleado  es incorrecto o el campo esta vacio");
        document.form1.id_empleado.focus();
        return;


    }
    document.form1.submit();
};