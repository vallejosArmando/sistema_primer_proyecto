"use strict"

function validar() {
    var barrio = document.form1.barrio.value;
    var calle_avenida = document.form1.value;
    var entre_que_calles = document.form1.entre_que_calles.value;
    var referencias = document.form1.referencias.value;
    var otro_recurrente = document.form1.otro_recurrente.value;
    var telefono_del_recurrente = document.form1.telefono_del_recurrente.value;
    var tipo_de_calzada = document.form1.tipo_de_calzada.value;
    var numero_de_caza = document.form1.numero_de_caza.value;
    var id_reclamo = document.form1.id_reclamo.value;


    if ((!v1.test(barrio)) || (barrio == "")) {
        alert("El nombre del barrio es incorrecto o el campo esta vacio ");
        document.form1.barrio.focus();
        return;
    }
    if ((!v1.test(calle_avenida)) || (calle_avenida == "")) {
        alert("El nombre de la calle o avenida son incorrrectos o el campo esta vacio");
        document.form1.calle_avenida.focus();
        return;
    }
    if ((!v1.test(entre_que_calles)) || (entre_que_calles == "")) {
        alert("El nombre de entre que calle es incorrecto o el campo esta vacio ");
        document.form1.entre_que_calles.focus();
        return;
    }
    if ((!v1.test(referencias)) || (referencias == "")) {
        alert("los nombres de las referencias  son incorrrectos o el campo esta vacio");
        document.form1.referencias.focus();
        return;
    }
    if ((!v1.test(otro_recurrente)) || (otro_recurrente == "")) {
        alert("El nombre del recurrente es incorrecto o el campo esta vacio ");
        document.form1.otro_recurrente.focus();
        return;
    }
    if ((!v2.test(telefono_del_recurrente)) || (telefono_del_recurrente == "")) {
        alert("el telefonodel recurrente son incorrrectos o el campo esta vacio");
        document.form1.telefono_del_recurrente.focus();
        return;
    }
    if ((!v1.test(tipo_de_calzada)) || (tipo_de_calzada == "")) {
        alert("El tipo de calzada  es incorrecto o el campo esta vacio ");
        document.form1.tipo_de_calzada.focus();
        return;
    }
    if ((!v2.test(numero_de_caza)) || (numero_de_caza == "")) {
        alert("los nombres son incorrrectos o el campo esta vacio");
        document.form1.numero_de_caza.focus();
        return;
    }
    if (id_reclamo == "") {
        alert("El id del reclamo es incorrecto o el campo esta vacio ");
        document.form1.id_reclamo.focus();
        return;
    }

    document.form1.submit();
}