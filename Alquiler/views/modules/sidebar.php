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
                <a href="/SkylAb-176/Alquiler-Artemis/Alquiler/" class="nav-link
                <?php if ($routesArray[5]==""):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/SkylAb-176/Alquiler-Artemis/Alquiler/users" class="nav-link
                <?php if ($routesArray[5]=="clinicHistory"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-hospital"></i>
                    <p>
                        Lsta 2
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ArTeM01-052/v1/psychology/psychology/interviews" class="nav-link
                <?php if ($routesArray[5]=="interviews"):?>active<?php endif?>
                  ">
                    <i class="nav-icon fa fa-file"></i>
                    <p>
                        Interviews
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ArTeM01-052/v1/psychology/psychology/users" class="nav-link
                <?php if ($routesArray[5]=="users"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ArTeM01-052/v1/psychology/psychology/psycology" class="nav-link
                <?php if ($routesArray[5]=="psycology"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-user-circle"></i>
                    <p>
                        Psycology
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ArTeM01-052/v1/psychology/psychology/treatment" class="nav-link
                <?php if ($routesArray[5]=="treatment"):?>active<?php endif?>
                ">
                    <i class="nav-icon fa fa-heartbeat"></i>
                    <p>
                        Treatment
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