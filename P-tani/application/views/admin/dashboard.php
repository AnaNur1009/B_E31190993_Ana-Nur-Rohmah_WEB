<div class="container-fluid">
	 <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">Tambah Barang</button>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-plus fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="<?php echo base_url('admin/data_barang')?>"><div class="btn btn-sm btn-success">Lihat Data Barang</div></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="<?php echo base_url('admin/stok_barang')?>"><div class="btn btn-sm btn-warning">Stok Barang</div></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example--> 
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="<?php echo base_url('admin/invoice')?>"><div class="btn btn-sm btn-danger">Data Pemesanan</div></a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-file-invoice fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!-- Content Row -->


           <!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label>Nama Penjual</label>
          <?php echo $this->session->userdata('username') ?>
        </div>

        <div class="form-group">
          <label>Alamat Penjual</label>
          <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
        </div>

         <div class="form-group">
          <label>No Telp</label>
          <input type="text" name="telp" class="form-control" placeholder="No Telp Anda (+62......)">
        </div>

        <div class="form-group">
          <label>Nama Produk</label>
          <input type="text" name="nama_brg" class="form-control" placeholder="Nama Produk Anda">
        </div>

        <div class="form-group">
          <label>Keterangan Produk</label>
          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Produk Anda">
        </div>

        <div class="form-group">
          <label>Kategori</label>
          <input type="text" name="kategori" class="form-control" placeholder="Sayuran/Buah/Karbohidrat/Biji-bijian">
        </div>

        <div class="form-group">
          <label>Jenis</label>
          <input type="text" name="jenis" class="form-control" placeholder="Organik/Non Organik">
        </div>

        <div class="form-group">
          <label>Harga Produk</label>
          <input type="text" name="harga" class="form-control" placeholder="Harga Produk anda">
        </div>

        <div class="form-group">
          <label>Jumlah Stok</label>
          <input type="text" name="stok" class="form-control" placeholder="Jumlah Stok Produk Anda">
        </div>

        <div class="form-group">
          <label>Minimal Pembelian</label>
          <input type="text" name="min_pembelian" class="form-control" placeholder="Min Pembelian Produk Anda">
        </div>

        <div class="form-group">
          <label>Nama Bank dan No Rekening</label>
          <input type="text" name="no_rek" class="form-control" placeholder="Nama Bank dan No Rekening Anda">
        </div>

        <div class="form-group">
          <label>Waktu Panen Produk</label>
          <input type="date" name="waktu_panen" class="form-control" placeholder="Waktu Panen Produk Anda">
        </div>
        
        <div class="form-group">
          <label>Gambar Produk</label><br>
          <input type="file" name="gambar" class="form-control" placeholder="Gambar Produk Anda">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>

</div>