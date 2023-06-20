<?php 
$url = "http://localhost/Alquiler-Artemis/apiRest/controller/produtoControlles.php?op=GetAll";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));


if (isset($_POST['nuevaPersona'])) {
    $url = "http://http://localhost/Alquiler-Artemis/apiRest/controller/inventarioControlles.php?op=insert";
    $data = array(
        'producto_id' => $_POST['producto_id'], 
        'CantidadInicial' => $_POST['CantidadInicial'], 
        'CantidadIngresos' => $_POST['CantidadIngresos'],
        'CantidadSalidas' => $_POST['CantidadSalidas'],
        'CantidadFinal' => $_POST['CantidadFinal'],
        'FechaInventario' =>$_POST['FechaInventario'],
        'TipoOperacion' =>$_POST['TipoOperacion']
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $response = curl_exec ($ch);
    curl_close($ch);
    print $response;

    echo "<script>alert('Datos guardados');document.location='#'</script>";
}

?>


<div class="card ">
              <div class="card-header bg-purple">
                <h3 class="card-title">Inventario por productos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <select class="form-control" name="producto_id" id="">
                        <?php foreach ($output as $out) {?>
                            <option value="<?php echo $out->producto_id; ?>">
                                <?php echo $out->nombre; ?>
                            </option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="CantidadInicial">Cantidad Inicial</label>
                    <input type="nuber" name="CantidadInicial" class="form-control" id="CantidadInicial" placeholder="Inicial...">
                  </div>
                  <div class="form-group">
                    <label for="CantidadIngresos">Cantidad Ingresos</label>
                    <input type="nuber" name="CantidadIngresos" class="form-control" id="CantidadIngresos" placeholder="Ingresos...">
                  </div>
                  <div class="form-group">
                    <label for="CantidadSalidas">Cantidad Salidas</label>
                    <input type="nuber" name="CantidadSalidas" class="form-control" id="CantidadSalidas" placeholder="Salidas...">
                  </div>
                  <div class="form-group">
                    <label for="CantidadFinal">Cantidad Final</label>
                    <input type="nuber" name="CantidadFinal" class="form-control" id="CantidadFinal" placeholder="Cantidad...">
                  </div>
                  <div class="form-group">
                    <label for="FechaInventario">Fecha Inventario</label>
                    <input type="date" name="FechaInventario" class="form-control" id="FechaInventario">
                  </div>
                  <div class="form-group">
                    <label for="TipoOperacion">Tipo Operacion</label>
                    <textarea class="form-control" name="TipoOperacion" id="" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="enviar" name="nuevaPersona">Submit</button>
                </div>
              </form>
            </div>