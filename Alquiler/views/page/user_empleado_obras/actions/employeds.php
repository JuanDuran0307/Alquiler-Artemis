<?php
$url = "localhost/ArTeM01-055/Alquiler-Artemis/apiRest/controllers/campus.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

$output = json_decode(curl_exec($curl));

?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Employeds</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Edad</th>    
                    <th>Celular</th>
                    <th>imagen</th>

                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($output as $out)
                        {
                    ?>
                  <tr>
                    <td><?php echo $out->id; ?></td>
                    <td><?php echo $out->nombre; ?></td>
                    <td><?php echo $out->edad; ?></td>
                    <td><?php echo $out->celular; ?></td>
                    <td><?php echo $out->imagen; ?></td>
      
                  </tr>
                  <?php }?>
              
                </table>
              </div>
              <!-- /.card-body -->
            </div>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>