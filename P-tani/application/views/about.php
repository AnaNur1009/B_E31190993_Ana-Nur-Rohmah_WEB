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
        <a class="nav-link" href="<?php echo base_url('dashboard1/about/')?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('riwayat/')?>">Riwayat Belanja</a>
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

	
	<div class="alert alert-secondary">
		<p class="text-left align-middle">Pertanian adalah usaha pengolahan tanah untuk pembudidayaan tanaman pangan masyarakat agraris sangat mengandalkan sektor pertanian sebagai mata pencarian Utama. <br/> 
    P- Tani adalah aplikasi untuk mensejahterakan petani dan masyarakat, dengan memberikan info terbaru tentang harga pasar dan komoditas yang banyak ditanam.<br/>
    Sehingga petani dapat memprediksi komoditas yang dapat memberikan banyak keuntungan. Masyarakat juga bisa mengetahui harga Komoditas mulai dari Harga Produsen / Harga Petani hingga Harga Konsumen / Harga Pasar.<br/><br/>
    Permasalahan yang menjadi faktor pembuatan web Aplikasi P-Tani:<br/>
    1. Penggunaan Teknologi yang masih Sederhana.<br/>
    2. Wilayah pasaran hasil Pertanian yang sifatnya masih sempit atau local.<br/>
    3. Sedikitnya Keuntungan yang diperoleh petani.
</p>
<hr>
   <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url('uploads/petani.png')?>" width="50px" height="225px" class="card-img-top">
      </div>

      <div class="col-md-8">
        <table class="table">
          <tr>
            <td><strong>PENJELASAN:</strong></td>
            <td>Gambar disamping menjelaskan bahwa Aplikasi web P-Tani ini bermanfaat untuk menyatukan para petani untuk menjual produk yang berkualitas, hal itu dapat diketahui dari gambar dua orang yang  terdiri dari wanita dan pria yang sedang membawa produk hasil Tani.</td>
          </tr>
          
        </table>
</div></div>

<hr>
   <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url('uploads/logohp.png')?>" width="50px" height="225px" class="card-img-top">
      </div>

      <div class="col-md-8">
        <table class="table">
          <tr>
            <td><strong>PENJELASAN:</strong></td>
            <td>Gambar disamping menjelaskan bahwa Aplikasi web P-Tani ini dapat dijangkau dengan mudah dengan menggunakan smartphone.</td>
          </tr>
          
        </table>
</div></div></div>
    </div>
    
    <a href="<?php echo base_url('dashboard1/')?>"><div class="btn btn-sm btn-danger mt-3 ml-4" align="center">Back</div></a>
	</div>
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