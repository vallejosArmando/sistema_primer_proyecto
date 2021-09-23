"use strict"

function validar() {

    var id_persona = document.form1.id_persona.value;
    var nom_usuario = document.form1.nom_usuario.value;
    var clave = document.form1.clave.value;

    if ((!v2.test(id_persona) || (id_persona == ""))) {
        alert("El id de la persona es incorrecto o el campo esta vacio")
        document.form1.id_persona.focus();
        return;

    }
    if ((!v1.test(nom_usuario) || (nom_usuario == ""))) {
        alert("El nombre del usuario es incorrecto o el campo esta vacio");
        document.form1.nom_usuario.focus();
        return;

    }
    if (clave == "") {
        alert("LA clave es incorrecta o el campo esta vacio");
        document.form1.clave.focus();
        return;

    }
    document.form1.submit();
}