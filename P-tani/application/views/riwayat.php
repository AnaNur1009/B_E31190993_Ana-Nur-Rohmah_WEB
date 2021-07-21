<div class="container-fluid">

	<h3><i class="fas fa-shopping-bag mr-3"></i>RIWAYAT BELANJA</h3>

	<table class="table table-bordered table-hover table-striped mb-4">
		<tr>
			<th>Kode Pesanan</th>
			<th>Nama Customer</th>
			<th>Alamat Pengiriman</th>
			<th>No Telp</th>
			<th>Metode</th>
			<th>Status</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Opsi</th>
		</tr>

<?php foreach ($riwayat as $rwy): ?>
		<tr>
			<td><?php echo $rwy->noresi ?></td>
			<td><?php echo $rwy->nama ?></td>
			<td><?php echo $rwy->alamat ?></td>
			<td><?php echo $rwy->telp ?></td>
			<td><?php echo $rwy->metode?></td>
			<td><?php echo $rwy->status?></td>
			<td><?php echo $rwy->tgl_pesan ?></td>
			<td><?php echo $rwy->batas_bayar ?></td>
			<td><center><?php echo anchor('dashboard1/detaill/'.$rwy->id, '<div class="btn btn-sm btn-primary mb-3">Detail</div>') ?>
				<?php echo anchor('dashboard1/edit/'.$rwy->id, '<div class="btn btn-sm btn-secondary ">Konfirmasi</div>') ?>
			</center></td>
		</tr>

	<?php endforeach; ?>
		
	</table>

<?php echo anchor('dashboard1/index/', '<div class="btn btn-sm btn-danger mt-3">Back</div>') ?>




</div>