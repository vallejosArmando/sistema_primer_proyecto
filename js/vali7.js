"use strict"

function validar() {
    var nombre = document.form1.nombre.
    value;
    var descripcion = document.form1.descripcion.value;
    var id_sistema_reclamo = document.form1.id_sistema_reclamo.value;


    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El valor de nombres es incorrecto o el campo esta vacio ");
        document.form1.nombre.focus();
        return;
    }
    if ((!v1.test(descripcion)) || (descripcion == "")) {
        alert("El valor de descripcion es incorrecto o el campo esta vacio ");
        document.form1.descripcion.focus();
        return;
    }

    if (id_sistema_reclamo == "") {
        alert("El id es incorrrectos o el campo esta vacio");
        document.form1.id_sistema_reclamo.focus();
        return;
    }
    document.form1.submit();

}