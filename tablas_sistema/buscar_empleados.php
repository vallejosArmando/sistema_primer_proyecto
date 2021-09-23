<?php
    include_once('../conexion.php');

    if(!empty($_POST['busqueda'])){
        $busqueda = explode(" ", $_POST['busqueda']);
        $sql = "SELECT * FROM empleados WHERE nombres LIKE '%".$busqueda[0]."%'";
        for($i =1; $i < count($busqueda);$i++){
            if(!empty($busqueda[$i])){
                $sql .= "AND nombres  LIKE '%".$busqueda[$i]."%'";
            }
        }
        $sql .= "LIMIT 5";
        $result = mysqli_query($con,$sql);
        while($item = mysqli_fetch_assoc($result)){
		   
           echo '
		   <table  border="2" class="tabla" >
		   <thead  class="thead" >
		   <tr>
		   <th >id</th>
		   <th>Tipo empleado</th>
		   <th>Area</th>
		   <th>Nombre</th>
		   <th>Ap. paterno</th>
		   <th>Ap. materno</th>
		   <th>Cedula</th>
		   <th>Telefono</th>
		   <th>Tel. celular</th>
		   <th>Direccion</th>
		   <th colspan="2">Accion</th>
		   
		   </tr>
		   
		   </thead>
		   <tbody>
<td>'.$item['id_empleado'].'</td>
<td>'.$item['id_tipo_empleado'].'</td>
<td>'.$item['id_area'].'</td>
<td>'.$item['nombres'].'</td>
<td>'.$item['ap'].'</td>
<td>'.$item['am'].'</td>
<td>'.$item['ci'].'</td>
<td>'.$item['tel_fijo'].'</td>
<td>'.$item['tel_cel'].'</td>
<td>'.$item['direccion'].'</td> 
<td><button type="button" href="javascript:void(0)"class="btn btn-success" data-toggle="modal" data-target="#editChildresn '.$item['id_empleado'].'">
                                  Modificar
                              </button></td>
<td>  <a class="btn btn-danger" id="delete" data-id='.$item['id_empleado'].' href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a></td>
                          </tr>
                  <!--Ventana Modal para Actualizar--->

				  </tbody> 

                
                    </table>';
		
        }
    }

?>