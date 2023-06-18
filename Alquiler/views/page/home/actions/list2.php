<?php 
$url = "http://localhost/Alquiler-Artemis/apiRest/controller/inventarioControlles.php?op=GetAll";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));




?>


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Inventario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>producto</th>
                    <th>Cantidad Inicial</th>
                    <th>Cantidad Ingresos</th>
                    <th>Cantidad Salidas</th>
                    <th>Cantidad Final</th>
                    <th>Fecha</th>
                    <th>Tipo Operacion</th>
                    <!-- <th>Editar</th>
                    <th>Borrar</th> -->

                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($output as $out) {
                    ?>
                  <tr>
                    <td><?php echo $out->id; ?></td>
                    <td><?php echo $out->nombre_producto; ?></td>
                    <td><?php echo $out->CantidadInicial; ?></td>
                    <td><?php echo $out->CantidadIngresos; ?></td>
                    <td><?php echo $out->CantidadSalidas; ?></td>
                    <td><?php echo $out->CantidadFinal; ?></td>
                    <td><?php echo $out->FechaInventario; ?></td>
                    <td><?php echo $out->TipoOperacion; ?></td>
                    <!-- <td><button class="btn btn-warning">Editar</button></td>
                    <td><button class="btn btn-danger">Eliminar</button></td> -->
                  </tr><?php } ?>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>



