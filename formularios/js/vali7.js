"use strict"

function validar() {
    var nombre = document.form1.nombre.
    value;
    var descripcion = document.form1.descripcion.value;


    if ((!v1.test(nombre)) || (nombre == "")) {
        Swal.fire('El valor de nombres es incorrecto o el campo esta vacio')

        //        alert("El valor de nombres es incorrecto o el campo esta vacio ");//
        document.form1.nombre.focus();
        return;
    }
    if ((!v1.test(descripcion)) || (descripcion == "")) {
        Swal.fire('El valor de nombres es incorrecto o el campo esta vacio')

        //  alert("El valor de descripcion es incorrecto o el campo esta vacio ");//
        document.form1.descripcion.focus();
        return;
    }


    document.form1.submit();

}

function eliminar(id_area) {
    var id_area = document.form1.id_area.value;

    if (!isset(id_area)) {
        Swal.fire('El valor de nombres es incorrecto o el campo esta vacio')
        document.form1.nombre.focus();
        return;

    } else {
        Swal.fire('El valor de nombres es incorrecto o el campo esta vacio')

    }
    document.form1.submit();

}