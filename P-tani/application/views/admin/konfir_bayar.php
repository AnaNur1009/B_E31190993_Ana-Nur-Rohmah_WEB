<div class="container-fluid">
	<h4>KONFIRMASI PEMBAYARAN</h4>
<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Kode Pesanan</th>
			<th>Nama Customer</th>
			<th>Alamat Kirim</th>
			<th>No Telp</th>
			<th>Status</th>
			<th>Status Pesanan</th>
			<th>Opsi</th>
			
		</tr>

<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->noresi?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->telp ?></td>
			<td><?php echo $inv->status ?></td>
			<td><?php if ($inv->status =="LUNAS"): ?>
					<div class="alert alert-success alert-sm"><center>Lunas</center></div>
					<?php elseif ($inv->status =="DIPROSES"): ?>
					<div class="alert alert-success alert-sm"><center>Diproses</center></div>
					<?php elseif ($inv->status =="DIBATALKAN"): ?>
					<div class="alert alert-success alert-sm"><center>--</center></div>
						<?php else : ?>
						<div class="alert alert-secondary alert-sm"><center>Belum Lunas</center></div>
				<?php endif ?>
			</td>
			<td><center><?php echo anchor('admin/konfir_bayar/lihat/'. $inv->id, '<div class="btn btn-primary btn-sm" ><i class="fas fa-eye"> Lihat Bukti</i> </div>')?> </center></td>
			
		</tr>

	<?php endforeach; ?>
		
	</table>

</div>