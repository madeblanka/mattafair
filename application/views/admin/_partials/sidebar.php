<div class="wrapper">
    <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('admin/dist/img/AdminLTELogo.png')?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('additional/adminindexadditional/') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Additional
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('booked/adminindexbooked/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Booked
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('cart/adminindexcart/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Cart
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('hotel/adminindexhotel/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Hotel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('room/adminindexroom/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Room
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('image/adminindeximage/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('hoteltour/adminindexhoteltour/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Hotel Tour
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('tour/adminindextour/') ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Tour
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  