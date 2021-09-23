"use strict"

function validar() {
    var nombre = document.form1.nombre.
    value;
    var descripcion = document.form1.descripcion.value;


    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form1.nombre.focus();
        return;
    }

    if ((!v1.test(descripcion)) || (descripcion == "")) {
        alert("El valor de descripcion_funcion  es incorrrectos o el campo esta vacio");
        document.form1.descripcion.focus();
        return;
    }


    document.form1.submit();

}