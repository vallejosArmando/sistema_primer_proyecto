function eliminar() {
    $(document).ready(function() {

        readProducts(); /* it will load products when document loads */

        $(document).on('click', '#delete', function(e) {

            var id_jefe_area = $(this).data('id');
            SwalDelete(id_jefe_area);
            e.preventDefault();
        });

    });

    function SwalDelete(id_jefe_area) {

        swal({
            title: 'Estas seguro?',
            text: "Se borrará de forma permanente!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, bórralo!',
            showLoaderOnConfirm: true,

            preConfirm: function() {
                return new Promise(function() {

                    $.ajax({
                            url: '../eliminar_jefe_area.php',
                            type: 'POST',
                            data: 'id_jefe_area=' + id_jefe_area,
                            dataType: 'json'
                        })
                        .done(function(response) {
                            swal('Eliminado!', response.message, response.status);
                            readProducts();
                        })
                        .fail(function() {
                            swal('Oops...', 'No se puede eliminar por que esta en uso:!', 'question');
                        });
                });
            },
            allowOutsideClick: false
        });

    }

    function readProducts() {
        $('#tab').load('../tabla_jefe_areas.php');
    }
}