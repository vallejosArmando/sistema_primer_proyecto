$('#formLogin').submit(function(e) {
    e.preventDefault();
    var nom_usuario = $.trim($("#nom_usuario").val());
    var clave = $.trim($("#clave").val());
    var rol = $.trim($("#rol").val());

    if (nom_usuario.length == "" || clave.length == "") {
        Swal.fire({
            type: 'warning',
            title: 'Ingrese Usuario y/o Password',
        });
        return false;
    } else {
        $.ajax({
            url: "bd/login.php",
            type: "POST",
            datatype: "json",
            data: { nom_usuario: nom_usuario, clave: clave, rol: rol },
            success: function(data) {
                //console.log(data);
                if (data == "null") {
                    Swal.fire({
                        type: 'error',
                        title: 'Usuario y/o Password incorrectas',
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '¡Conexión exitosa!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "../tablaSeguridad/index.php";
                        }
                    })
                }
            }
        });
    }
});