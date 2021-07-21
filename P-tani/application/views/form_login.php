<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6 d-none d-lg-block "><center></center><img src="<?php echo base_url('uploads/logoPtani.png')?>" width="450px" align="text-center"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="alert alert-success mb-4">SIGN IN</h4>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>"class="user">
                    <div></div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                      <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                       <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                    </div>
                   <button type="submit" class="btn btn-success form-control">SIGN IN</button>
                    <hr>
                    <!--<a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>-->
                  </form>
                  <hr>
                  <div class="text-center">
                    <h6><strong>  Daftar Sebagai?</strong></h6>
                  </div>
                  <center>
                    <a class="small" href="<?php echo base_url('registrasi/index'); ?>"><div class="btn  btn-danger btn-sm mt-3" align="center">Customer</div></a><a class="small" href="<?php echo base_url('daftar/index'); ?>"><div class="btn  btn-warning btn-sm ml-4 mt-3" align="center">Owner</div></a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

 


