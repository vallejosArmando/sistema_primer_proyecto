"use strict"

function validar() {

    var nombre = document.form1.nombre.value;
    var ap_paterno = document.form1.ap_paterno.value;
    var ap_materno = document.form1.ap_materno.value;
    var telefono = document.form1.telefono.value;
    var correo_electronico = document.form1.correo_electronico.value;


    var codigo_usuario = document.form1.codigo_usuario.value;
    var direccion = document.form1.direccion.value;
    var id_sistema_reclamo = document.form1.id_sistema_reclamo.value;



    if ((!v1.test(nombre)) || (nombre == "")) {
        alert("El nombre es incorrecto o el campo esta vacio");
        document.form1.nombre.focus();
        return;
    }
    if ((!v1.test(ap_paterno)) || (ap_paterno == "")) {
        alert("El apellido paterno es incorrecto o el campo esta vacio");
        document.form1.ap_paterno.focus();
        return;
    }
    if ((!v1.test(ap_materno)) || (ap_materno == "")) {
        alert("El apellido materno es incorrecto o el campo esta vacio");
        document.form1.ap_materno.focus();
        return;
    }
    if ((!v2.test(telefono)) || (telefono == "")) {
        alert("el numero de telefono es incorrecto o el campo esta vacio");
        document.form1.telefono.focus();
        return;
    }

    if ((!expReg.test(correo_electronico)) || (correo_electronico == "")) {
        alert("el correo electronico no es valido");
        document.form1.correo_electronico.focus();
        return;
    }
    if ((!v2.test(codigo_usuario)) || (codigo_usuario == "")) {
        alert("El codigo del usuario es incorrecto o el campo esta vacio");
        document.form1.codigo_usuario.focus();
        return;
    }
    if ((!v1.test(direccion)) || (direccion == "")) {
        alert("La direccion es incorrecta o el campo esta vacio");
        document.form1.direccion.focus();
        return;
    }
    if (id_sistema_reclamo == "") {
        alert("el id del sistema de reclamos es incorrecto o el campo esta vacio");
        document.form1.id_sistema_reclamo.focus();
        return;
    }
    document.form1.submit();
}