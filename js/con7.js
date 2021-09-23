"user strict"

function validar() {

    var grupo = document.form1.grupo.value;
    if (!v1.test(grupo) || (grupo == "")) {
        alert("El grupo es incorrecto o el campo esta vacio");
        document.form1.grupo.focus();
        return;

    }
    document.form1.submit();

}