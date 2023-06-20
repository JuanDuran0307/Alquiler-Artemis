<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pychology 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/alejandro.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



              <li class="nav-item">
                <a href="/ArTeM01-055/v1/Alquiler-Artemis/Alquiler/entrada" class="nav-link
                <?php if ($routesArray[4]=="entrada"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-user-circle"></i>
                    <p>
                        entrada
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ArTeM01-055/Alquiler-Artemis/Alquiler/" class="nav-link
                <?php if ($routesArray[4]==""):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>


            <li class="nav-item">
                <a href="/ArTeM01-055/Alquiler-Artemis/Alquiler/salida" class="nav-link
                <?php if ($routesArray[4]=="salida"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-heartbeat"></i>
                    <p>
                        salida y entrada
                    </p>
                </a>
            </li>
   

            <li class="nav-item">
                <a href="/ArTeM01-055/Alquiler-Artemis/Alquiler/user_empleado_obras" class="nav-link
                <?php if ($routesArray[4]=="user_empleado_obras"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Users_empleados_obras
                    </p>
                </a>
            </li>
            
 
 

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>




          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>