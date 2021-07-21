<body class="bg-gradient-success">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "><img src="<?php echo base_url('uploads/petani.png')?>" width="500px" align="text-center"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">FORM DAFTAR CUSTOMER</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/index')?>" class="user">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="No.Telp Anda" name="telp">

                  <?php echo form_error('telp', '<div class="text-danger small ml-2">', '</div>')?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username (Masukan Nama Lengkap Anda)" name="username">
                  <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>')?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>')?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_2">
                    <?php echo form_error('password_2', '<div class="text-danger small ml-2">', '</div>')?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Alamat Email Anda" name="email">
                  <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>')?>
                </div>
                

             <button type="submit" class="btn btn-success btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login')?>">Sudah Punya Akun? Silahkan Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 
