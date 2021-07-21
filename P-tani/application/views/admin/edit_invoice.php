<div class="container-fluid">
	<h3><i class="fa fa-edit"></i>EDIT DATA PEMESANAN</h3>

	<?php foreach($invoice as $inv): ?>

<form method="post" action="<?php echo base_url(). 'admin/invoice/update' ?>">
	<div class="form-group">
		<label>Kode Pesanan</label>
		<input type="teks" name="noresi" class="form-control" value="<?php echo $inv->noresi ?>">
	</div>
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="teks" name="nama" class="form-control" value="<?php echo $inv->nama ?>">
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input type="hidden" name="id" class="form-control" value="<?php echo $inv->id ?>">
		<input type="teks" name="alamat" class="form-control" value="<?php echo $inv->alamat ?>">
	</div>

	<div class="form-group">
		<label>No Telp</label>
		<input type="teks" name="telp" class="form-control" value="<?php echo $inv->telp ?>">
	</div>

	<!--<div class="form-group">
		<label>Nama Bank dan No Rekening</label>
		<input type="teks" name="nama_bank" class="form-control" value="<?php echo $inv->nama_bank ?>">
	</div>-->

	<div class="form-group">
		<label>Metode</label>
		<input type="teks" name="metode" class="form-control" value="<?php echo $inv->metode ?>">
	</div>

	<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
</form>

	<?php endforeach ?>

</div>
