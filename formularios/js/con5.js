"use strict"

function validar() {
    var id_opcion = document.form1.id_opcion.value;
    var id_rol = document.form1.id_rol.value;

    if ((!v2.test(id_opcion) || (id_opcion == ""))) {
        alert("El id de opcion es incorrecto o el campoe esta vacio");
        document.form1.id_opcion.focus();
        return;
    }



    if (!v2.test(id_rol) || (id_rol == "")) {
        alert("El id de rol es incorrecto o el campoe esta vacio");
        document.form1.id_rol.focus();
        return;

    }
    document.form1.submit();

}