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
	
<div>
  <h5 class="card-header">Deskripsi</h5>
  <div class="card-body">

<?php foreach($barang as $brg) : ?>
    <div class="row">
    	<div class="col-md-4">
    		<img src="<?php echo base_url().'/uploads/'.$brg->gambar?>" class="card-img-top">
    	</div>

    	<div class="col-md-8">
    		<table class="table">
    			<tr>
    				<td>Nama Produk</td>
    				<td><strong><?php echo $brg->nama_brg ?></strong></td>
    			</tr>

    			<tr>
    				<td>Deskripsi</td>
    				<td><strong><?php echo $brg->keterangan ?></strong></td>
    			</tr>

           <tr>
            <td>Harga</td>
            <td><strong><?php echo $brg->harga ?></strong></td>
          </tr>

          <tr>
            <td>Stok</td>
            <td><strong><?php echo $brg->stok ?></strong></td>
          </tr>

          <tr>
            <td>Nama Penjual</td>
            <td><strong><?php echo $brg->nama_penjual ?></strong></td>
          </tr>

          <tr>
            <td>Alamat</td>
            <td><strong><?php echo $brg->alamat ?></strong></td>
          </tr>

          <tr>
            <td>No Telp</td>
            <td><strong>Kamu bisa bertanya untuk lebih jelas melalui nomer WA : <a href="https://api.whatsapp.com/send?phone=<?php echo $brg->telp ?>&text=Hi"><?php echo $brg->telp ?></a></strong></td>
          </tr>

          <tr>
            <td>No-Rekening</td>
            <td><strong><?php echo $brg->no_rek ?></strong></td>
          </tr>

          <tr>
            <td>Waktu Panen</td>
            <td><strong><?php echo $brg->waktu_panen ?></strong></td>
          </tr>
          
    		</table>

    		  <?php echo anchor('dashboard1/index/', '<div class="btn btn-sm btn-danger">Back</div>') ?>
    	</div>
    </div>
<?php endforeach; ?>
  </div>
</div>

</div>
