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


                        <th colspan="3">Acciones</th>

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
                    require '../conexion.php';

session_start();


if(isset($_SESSION['consulta'])){
    if($_SESSION['consulta'] > 0){
        $idp=$_SESSION['consulta'];

        $sql = " SELECT j.*, a.nombre as nombre FROM jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE j.id_jefe_area='$idp' ORDER BY id_jefe_area asc LIMIT $desde,$por_pagina";
    }else{
	
	
$sql = " SELECT j.*, a.nombre as nombre FROM jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE j.estado=1 ORDER BY id_jefe_area asc LIMIT $desde,$por_pagina";  
	
    }
}else{

    $sql = " SELECT j.*, a.nombre as nombre FROM jefes_areas j INNER JOIN areas a on j.id_area=a.id_area  WHERE j.estado=1 ORDER BY id_jefe_area asc LIMIT $desde,$por_pagina";    
}

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
<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fichaJefeArea<?php echo $data['id_jefe_area']; ?>">
                                  Ficha
                              </button></td>
                          </tr>
                      <?php  include('modificar_jefe_area.php'); ?>
                      <?php  include('ficha_tj.php'); ?>

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