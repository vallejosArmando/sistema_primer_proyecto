
<?php require '../include/scripts.php' ?>

<body>
<?php require '../include/header.php'; ?>
<section id="container">

<h2 id="h2">TABLA JEFE FE AREAS</h2>


            <div class="agregar">
                <a href="../formularios/jefe_areas.php" class="btn btn-primary">Agregar</a>
            </div>
            <br>
            <table border="2" class="tabla "  >
                <thead class="thead">

                    <tr>
                    </tr>
                    <tr>
                        <th>Nr</th>
                        <th>Area</th>
                        <th>Nombre</th>
                        <th>Ap. paterno</th>
                        <th>Ap. materno</th>

                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th  >Fecha_inicio</th>
                        <th>Fecha_fin_/</th>


                        <th colspan="2">Acciones</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    require '../conexion.php';

                    $sql_registe = mysqli_query($con, "SELECT COUNT(*) as total_registro FROM jefes_areas WHERE estado = 1 ");
                    $result_register = mysqli_fetch_array($sql_registe);
                    $total_registro = $result_register['total_registro'];

                    $por_pagina = 5;

                    if (empty($_GET['pagina'])) {
                        $pagina = 1;
                    } else {
                        $pagina = $_GET['pagina'];
                    }

                    $desde = ($pagina - 1) * $por_pagina;
                    $total_paginas = ceil($total_registro / $por_pagina);


                    $sql = " SELECT j.*, a.nombre as nombre FROM jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE j.estado=1 ORDER BY id_jefe_area asc LIMIT $desde,$por_pagina";
                    $sqlist = mysqli_query($con, $sql);
                    while ($data = mysqli_fetch_assoc($sqlist)) {

                    ?>
                        <tr>

                            <td><?php echo $data['id_jefe_area'];  ?></td>
                            <td><?php echo $data['nombre'];  ?></td>
                            <td><?php echo $data['nombres']; ?></td>
                            <td><?php echo $data['ap']; ?></td>
                            <td><?php echo $data['am']; ?></td>
                            <td><?php echo $data['ci']; ?></td>

                            <td><?php echo $data['telefono']; ?></td>
                            <td><?php echo $data['correo']; ?></td>
                            <td><?php echo $data['fec_inicio']; ?></td>
                            <td><?php echo $data['fec_fin']; ?></td>


                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#editChildresn<?php echo $data['id_jefe_area']; ?>">
                                  Modificar
                              </button></td>
<td>  <a class="btn btn-danger" id="delete" data-id=<?php echo $data['id_jefe_area']; ?> href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a></td>
                          </tr>
                      <?php  include('modificar_jefe_area.php'); ?>
                      <?php } ?>

                </tbody>

            </table>
            <div class="paginador">
                <ul>
                    <?php
                    if ($pagina != 1) {
                    ?>
                        <li><a href="?pagina=<?php echo 1; ?>">|<< /a>
                        </li>
                        <li><a href="?pagina=<?php echo $pagina - 1; ?>">
                                <<< /a>
                        </li>
                    <?php
                    }
                    for ($i = 1; $i <= $total_paginas; $i++) {
                        # code...
                        if ($i == $pagina) {
                            echo '<li class="pageSelected">' . $i . '</li>';
                        } else {
                            echo '<li><a href="?pagina=' . $i . '">' . $i . '</a></li>';
                        }
                    }

                    if ($pagina != $total_paginas) {
                    ?>
                        <li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
                        <li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
                    <?php } ?>
                </ul>
            </div>
</section>
            <?php require '../include/foot.php'; ?>

<script>
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
                return new Promise(function(resolve) {

                    $.ajax({
                            url: 'eliminar_jefe_area.php',
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
        $('#').load('tabla_jefe_areas.php');
    }

</script>
</body>

</html>