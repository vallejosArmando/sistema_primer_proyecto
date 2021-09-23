"use strict"

function validar() {
    var nombre = document.form1.nombre.
    value;
    var descripcion_funcion = document.form1.descripcion_funcion.value;
    var id_empleado = document.form1.id_empleado.value;


    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form1.nombre.focus();
        return;
    }

    if ((!v1.test(descripcion_funcion)) || (descripcion_funcion == "")) {
        alert("El valor de descripcion_funcion  es incorrrectos o el campo esta vacio");
        document.form1.descripcion_funcion.focus();
        return;
    }

    if (id_empleado == "") {
        alert("El valor de id empledo  es incorrrectos o el campo esta vacio");
        document.form1.id_empleado.focus();
        return;
    }
    document.form1.submit();

}