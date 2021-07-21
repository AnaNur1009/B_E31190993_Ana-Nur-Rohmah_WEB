<div class="container-fluid">
	<h3><i class="fa fa-edit"></i>EDIT DATA PRODUK</h3>

	<?php foreach($barang as $brg): ?>

<form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">
	<div class="form-group">
        <label>Nama Penjual</label>
        <input type="text" name="nama_penjual" class="form-control" value="<?php echo $brg->nama_penjual ?>">
    </div>

    <div class="form-group">
        <label>Alamat Penjual</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $brg->alamat ?>">
    </div>

    <div class="form-group">
        <label>No Telp</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $brg->telp ?>">
    </div>

	<div class="form-group">
		<label>Nama Barang</label>
		<input type="teks" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
	</div>
	
	<div class="form-group">
		<label>Keterangan</label>
		<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
		<input type="teks" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
	</div>

	<div class="form-group">
		<label>Kategori</label>
		<input type="teks" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
	</div>

	<div class="form-group">
		<label>Jenis</label>
		<input type="teks" name="jenis" class="form-control" value="<?php echo $brg->jenis ?>">
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="teks" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
	</div>

	<div class="form-group">
          <label>Minimal Pembelian</label>
          <input type="text" name="min_pembelian" class="form-control" value="<?php echo $brg->min_pembelian ?>">
        </div>

        <div class="form-group">
          <label>No Rekening</label>
          <input type="text" name="No_rek" class="form-control" value="<?php echo $brg->no_rek ?>">
        </div>

        <div class="form-group">
          <label>Waktu Panen</label>
          <input type="date" name="waktu_panen" class="form-control" value="<?php echo $brg->waktu_panen ?>">
        </div>
        

	<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
</form>

	<?php endforeach ?>

</div>
