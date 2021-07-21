<div class="container-fluid">
	<h3><i class="fas fa-check-double mr-3"></i>KONFIRMASI PEMBAYARAN</h3>

	<?php foreach($riwayat as $rwy): ?>

<form action="<?php echo base_url(). 'dashboard1/update' ?>" method="post" enctype="multipart/form-data"  >
	
	<div class="form-group">
		<label>Nama Customer</label>
		<input type="hidden" name="noresi" class="form-control" value="<?php echo $rwy->noresi ?>">
		<input type="teks" name="nama" class="form-control" value="<?php echo $rwy->nama ?>">
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input type="hidden" name="id" class="form-control" value="<?php echo $rwy->id ?>">
		<input type="teks" name="alamat" class="form-control" value="<?php echo $rwy->alamat ?>">
	</div>

	<div class="form-group">
		<label>No Telp</label>
		<input type="teks" name="telp" class="form-control" value="<?php echo $rwy->telp ?>">
	</div>

	<div class="form-group">
		<label>Metode</label>
		<input type="teks" name="metode" class="form-control" value="<?php echo $rwy->metode ?>">
	</div>

	<div class="form-group">
		<label>Status Pembayaran</label>
		<input type="teks" name="status" class="form-control" value="<?php echo $rwy->status ?>" placeholder="Gunakan Huruf Kapital">
	</div>
	<div class="form-group">
            <label>Bukti Pembayaran</label>
            <input type="file" name="bukti" class="form-control" value="<?php echo $rwy->bukti ?>"  >
          </div>
<div>
	<button type="submit" class="btn btn-primary btn-sm mt-3">Konfirmasi</button>
<a href="<?php echo base_url('riwayat/index')?>"><div class="btn btn-sm btn-dark mt-3" >Batal</div></a>
</div>
</form>

	<?php endforeach ?>

</div>
