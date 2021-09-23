"use strict"

function validar() {
    var id_grupo = document.form1.id_grupo.value;
    var opcion = document.form1.opcion.value;
    var contenido = document.form1.contenido.value;
    var orden = document.form1.orden.value;


    if (!v2.test(id_grupo) || (id_grupo == "")) {
        alert("El id del grupo es incorrecto o el campoe esta vacio");
        document.form1.id_grupo.focus();
        return;

    }
    if (!v2.test(opcion) || (opcion == "")) {
        alert("La opcion es incorrecta o el campo esta vacio");
        document.form1.opcion.focus();
        return;

    }
    if ((!v1.test(contenido) || (contenido == ""))) {
        alert("El contenido es incorrecto o le campo esta vacio");
        document.form1.contenido.focus();
        return;

    }
    if (orden == "") {
        alert("El orden es incoorecto o el campo esesta vacio");
        document.form1, orden.focus();
        return;

    }
    document.form1.submit();

}