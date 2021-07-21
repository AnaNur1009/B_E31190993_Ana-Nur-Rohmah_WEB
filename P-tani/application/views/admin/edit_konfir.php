<div class="container-fluid">
	<h3><i class="fas fa-check-double mr-3"></i>KONFIRMASI PEMESANAN</h3>

	<?php foreach($invoice as $inv): ?>

<form action="<?php echo base_url(). 'admin/dashboard_admin/update' ?>" method="post" enctype="multipart/form-data"  >
	
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="hidden" name="noresi" class="form-control" value="<?php echo $inv->noresi ?>">
		<input type="hidden" name="id" class="form-control" value="<?php echo $inv->id ?>">
		<input type="hidden" name="telp" class="form-control" value="<?php echo $inv->telp ?>">
		<input type="hidden" name="metode" class="form-control" value="<?php echo $inv->metode ?>">
		<input type="teks" name="nama" class="form-control" value="<?php echo $inv->nama ?>">
	</div>

	<div class="form-group">
		<label>Status Pesanan</label>
		<input type="teks" name="status" class="form-control" value="<?php echo $inv->status ?>" placeholder="Gunakan Huruf Kapital">
	</div>
	
<div>
	<button type="submit" class="btn btn-primary btn-sm mt-3">Konfirmasi</button>
<a href="<?php echo base_url('admin/konfir_bayar/index')?>"><div class="btn btn-sm btn-dark mt-3" >Batal</div></a>
</div>
</form>

	<?php endforeach ?>

</div>
