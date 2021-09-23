"use strict"

function validar() {
    var id_sistema_reclamo = document.form1.id_sistema_reclamo.value;
    var nombres = document.form1.nombres.value;
    var ap = document.form1.ap.value;
    var am = document.form1.am.value;
    var telefono = document.form1.telefono.value;
    var correo = document.form1.correo.value;
    var codigo_usuario = document.form1.codigo_usuario.value;
    var barrio = document.form1.barrio.value;
    var calle_avenida = document.form1.calle_avenida.value;
    var numero_de_casa = document.form1.numero_de_casa.value;

    var entre_que_calles = document.form1.entre_que_calles.value;
    var referencias = document.form1.referencias.value;
    var descripcion_del_reclamo = document.form1.descripcion_del_reclamo.value;
    var otro_recurrente = document.form1.otro_recurrente.value;
    var telefono_del_recurrente = document.form1.telefono_del_recurrente.value;
    var tipo_de_calzada = document.form1.tipo_de_calzada.value;
    var tipo_de_reclamo = document.form1.tipo_de_reclamo.value;

    if ((!v2.test(id_sistema_reclamo)) || (id_sistema_reclamo == "")) {
        alert("El id es incorrecto o el campo esta vacio ");
        document.form1.id_sistema_reclamo.focus();
        return;
    }

    if (nombres == "") {
        alert("El nombre es incorrecto o el campo esta vacio.");
        document.form1.nombres.focus();
        return;

    }
    if (ap == "") {
        alert("El apellido paterno es incorrecto o el campo esta vacio.");
        document.form1.ap.focus();
        return;

    }
    if (am == "") {
        alert("El apellido materno es incorrecto o el campo esta vacio.");
        document.form1.am.focus();
        return;
    }
    if ((!v2.test(telefono)) || (telefono == "")) {
        alert("El telefono es incorrecto o el campo esta vacio ");
        document.form1.telefono.focus();
        return;
    }
    if ((!expReg.test(correo)) || (correo == "")) {
        alert("El correo es incorrecto o el campo esta vacio.");
        document.form1.correo.focus();
        return;

    }
    if (codigo_usuario == "") {
        alert("El codogo es incorrecto o el campo esta vacio.");
        document.form1.codigo_usuario.focus();
        return;

    }
    if (barrio == "") {
        alert("El barrio es incorrecto o el campo esta vacio.");
        document.form1.barrio.focus();
        return;

    }
    if (calle_avenida == "") {
        alert("La calle o avenida es incorrecto o el campo esta vacio.");
        document.form1.calle_avenida.focus();
        return;

    }

    if ((!v2.test(numero_de_casa)) || (numero_de_casa == "")) {
        alert("El numero de casa es incorrecto o el campo esta vacio.");
        document.form1.numero_de_casa.focus();
        return;
    }
    if (entre_que_calles == "") {
        alert("Entre que calles es incorrecto o el campo esta vacio.");
        document.form1.entre_que_calles.focus();
        return;

    }

    if (referencias == "") {
        alert("La referencia es incorrecto o el campo esta vacio.");
        document.form1.referencias.focus();
        return;

    }
    if (descripcion_del_reclamo == "") {
        alert("La descripcion del reclamo es incorrecto o el campo esta vacio.");
        document.form1.descripcion_del_reclamo.focus();
        return;

    }
    if (otro_recurrente == "") {
        alert("El nombre del recurrente es incorrecto o el campo esta vacio.");
        document.form1.otro_recurrente.focus();
        return;

    }
    if ((!v2.test(telefono_del_recurrente)) || (telefono_del_recurrente == "")) {
        alert("El telefono del recurrente  es incorrecto o el campo esta vacio.");
        document.form1.telefono_del_recurrente.focus();
        return;

    }
    if (tipo_de_calzada == "") {
        alert("El tipo de calzada  es incorrecto o el campo esta vacio.");
        document.form1.tipo_de_calzada.focus();
        return;

    }
    if (tipo_de_reclamo == "") {
        alert("El tipo de reclamo es incorrecto o el campo esta vacio.");
        document.form1.tipo_de_reclamo.focus();
        return;


    }

    document.form1.submit();

};