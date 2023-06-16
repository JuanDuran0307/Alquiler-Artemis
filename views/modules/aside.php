<?php
    ini_set("display_errors" , 1);
    ini_set("display_startup_errors" , 1);
    error_reporting(E_ALL);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-blue">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pychology 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suarez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/" class="nav-link <?php if($routesArray[4]== ""): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Home
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/clinicHistory" class="nav-link <?php if($routesArray[4]== "clinicHistory"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Clinic History
                </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/interviews" class="nav-link <?php if($routesArray[4]== "interviews"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Interviews
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/psychologist" class="nav-link <?php if($routesArray[4]== "psychologist"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    psychologist
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/Treatment" class="nav-link <?php if($routesArray[4]== "Treatment"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    Treatment
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/ArTeM01-055/pSYCHOLOGY/psychology/Users" class="nav-link <?php if($routesArray[4]== "Users"): ?> active <?php endif ?>">
                <i class="nav-icon far fa-image"></i>
                <p>
                    users
                </p>
            </a>
        </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
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