<div class="container-fluid">
	<h4>Invoice Pemesanan</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Kode Pesanan</th>
			<th>Nama Customer</th>
			<th>Alamat Kirim</th>
			<th>No Telp</th>
			<th>Metode</th>
			<th>Tgl Pesan</th>
			<th>Batas Bayar</th>
			<th>Opsi</th>
			
		</tr>

<?php foreach ($invoice as $inv): ?>
		<tr>
			<td><?php echo $inv->noresi?></td>
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->telp ?></td>
			<td><?php echo $inv->metode ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary mb-3">Detail</div>') ?>
				<?php echo anchor('admin/invoice/edit/'.$inv->id, '<div class="btn btn-sm btn-secondary ">Update</div>') ?>
			</td>
		</tr>

	<?php endforeach; ?>
		
	</table>

</div>