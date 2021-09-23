"use strict"

function validar() {
    var rol = document.form1.rol.value;
    if (!v1.test(rol) || (rol == "")) {
        alert("El rol es incorrecto o el campoe esta vacio");
        document.form1.rol.focus();
        return;

    }
    document.form1.submit();

}