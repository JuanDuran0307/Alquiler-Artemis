
<?php
  /* capturas las rutas de la url */
  ini_set("display_errors" , 1);
    ini_set("display_startup_errors" , 1);
    error_reporting(E_ALL);
  $routesArray = explode("/", $_SERVER['REQUEST_URI']);
  $routesArray = array_filter($routesArray);


?>
  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alquiler Artemis</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/jszip/jszip.min.js"></script>
  <script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php 
    include "views/modules/navbar.php"
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
    include "views/modules/sidebar.php"
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


<?php 
    if (!empty($routesArray[4])) {
      if($routesArray[4]== "alquilados" ||
         $routesArray[4]== "entrada" ||
         $routesArray[4]== "salida" ||
         $routesArray[4]== "user_empleado_obras"){
          include "views/page/".$routesArray[4]."/".$routesArray[4].".php";
        } 
      
    }
    else{
      include "views/page/home/home.php";
  }
   
    
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "views/modules/footer.php";?>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
