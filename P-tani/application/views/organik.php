<div class="container-fluid">

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard1/')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('riwayat/')?>">Riwayat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="modal" data-target="#cart" aria-haspopup="true" aria-expanded="false">
          Cart
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
        </div>
      </li>
    </ul>
  </div>
</nav>

 <div class="row text-center mt-3">
   
    <?php foreach ($organik as $brg): ?>
       <div class="card ml-3" style="width: 17rem;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo base_url(). '/uploads/'. $brg->gambar?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
        <div class="btn btn-sm btn-warning mb-2">Min Pembelian <?php echo $brg->min_pembelian ?>Kg</div>
        <span class="badge badge-success mb-3">Rp.<?php echo number_format($brg->harga, 0,',','.')  ?></span>
         <?php echo anchor('dashboard1/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-sm btn-info"><i class="fa fa-plus fa-sm"></i><i class="fas fa-shopping-cart" ></i></div>') ?>
         <?php echo anchor('dashboard1/detail/' .$brg->id_brg, '<div class="btn btn-sm btn-secondary">Deskripsi</div>') ?>
      </div>
    </div>
  </div>
</div>
    <?php endforeach; ?>
    
  </div>
  <?php echo anchor('dashboard1/index/', '<div class="btn btn-sm btn-danger mt-3">Back</div>') ?>
  </div>
  
 <div class="modal fade" id="cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-shopping-cart" ></i> CART</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <table class="table table-bordered table-striped table-hover bg-light">
    <tr>
      <th>NO</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Sub Total</th>
    </tr>

    <?php 
    $no=1;
    foreach ($this->cart->contents() as $items): ?>

      <tr>
        <td><?php  echo $no++ ?></td>
        <td><?php echo $items['name'] ?></td>
        <td><?php echo $items['qty'] ?></td>
        <td align="right">Rp.<?php echo number_format($items['price'], 0,',','.')  ?></td>
        <td align="right">Rp.<?php echo number_format($items['subtotal'], 0,',','.')   ?></td>
      </tr>
      

    <?php endforeach; ?>
      <tr>
        <td colspan="4"></td>
        <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
      </tr>
  </table>
      <div class="modal-footer">
        <a href="<?php echo base_url('dashboard1/hapus_keranjang')?>"><div class="btn btn-sm btn-danger">Batalkan</div></a>
    <a href="<?php echo base_url('dashboard1/index')?>"><div class="btn btn-sm btn-primary">Tambah</div></a>
    <a href="<?php echo base_url('dashboard1/pembayaran')?>"><div class="btn btn-sm btn-success">CheckOut</div></a>
      </div>

        </form>
    </div>
  </div>
</div>
 
  
  
  
  
  




