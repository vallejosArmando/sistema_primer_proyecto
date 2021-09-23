"use strict"

function validar() {
    var id_usuario = document.form1.id_usuario.value;

    var id_rol = document.form1.id_rol.value;

    if (!v2.test(id_usuario) || (id_usuario == "")) {
        alert("El id del usuario es incorrecto o el campo esta vacio");
        document.form1.id_usuario.focus();
        return;

    }
    if (!v2.test(id_rol) || (id_rol == "")) {
        alert("El id de rol es incorrecto o el campo esta vacio");
        document.form1.id_rol.focus();
        return;


    }
    document.form1.submit();
}