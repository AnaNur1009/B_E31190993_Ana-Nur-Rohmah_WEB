
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
         <img src="<?php echo base_url('uploads/logoPtani.png')?>" width="100px" height="100px">
        <div class="sidebar-brand-text mx-3">TOKO <br>P-Tani<br>(Owner) </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin')?>">
          <i class="fas fa-book"></i>
          <span>Menu Utama</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo base_url('admin/konfir_bayar')?>">
          <i class="fas fa-tasks"></i>
          <span>Konfirmasi Pembayaran</span></a>
      

      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
             <ul class="na navbar-nav navbar-right">
              <?php if($this->session->userdata('username')) {?>
                <li><div class="btn btn-sm btn-warning btn-lg btn-block"><i class="fas fa-user" ></i> <?php echo $this->session->userdata('username') ?></a></div></li>
                <li class="ml-2"><div class="btn btn-sm btn-danger btn-lg btn-block"><strong><?php echo anchor('auth/logout', 'Logout'); ?></strong></li>
              <?php }else{ ?>
              <li><?php echo anchor('authh/login', 'Login'); ?></li>
            <?php } ?>
            </ul>

          </ul>

        </nav>
        <!-- End of Topbar -->
