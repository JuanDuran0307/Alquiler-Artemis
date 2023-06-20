<?php 
$url = "http://localhost/Alquiler-Artemis/apiRest/controller/produtoControlles.php?op=GetAll";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));




?>


<div class="card">
              <div class="card-header">
                <h3 class="card-title">Productos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <!-- <th>Editar</th>
                    <th>Borrar</th> -->

                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($output as $out) {
                    ?>
                  <tr>
                    <td><?php echo $out->producto_id; ?></td>
                    <td><?php echo $out->nombre; ?></td>
                    <!-- <td><button class="btn btn-warning">Editar</button></td>
                    <td><button class="btn btn-danger">Eliminar</button></td> -->
                  </tr><?php } ?>


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
  
</script>

