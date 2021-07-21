<div class="container-fluid">
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
      	<th>JENIS</th>
			<th>HARGA</th>
			<th>MIN PEMBELIAN</th>
			<th colspan="3">OPSI</th>
		</tr>
		
		<?php 
			$no=1;
          foreach($barang as $brg): ?>
          	<tr>
          		<td><?php echo $no++ ?></td>
          		<td><?php echo $brg->nama_brg ?></td>
          		<td><?php echo $brg->keterangan?></td>
          		<td><?php echo $brg->kategori ?></td>
              <td><?php echo $brg->jenis ?></td>
          		<td><?php echo $brg->harga ?></td>
          		<td><center><?php echo $brg->min_pembelian ?></center></td>
          		<td><?php echo anchor('admin/data_barang/edit/'. $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
          		<td><?php echo anchor('admin/data_barang/hapus/'. $brg->id_brg,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
          	</tr>
          	
          	<?php endforeach;?>
	</table>
</div>

<?php echo anchor('admin/dashboard_admin/', '<div class="btn btn-sm btn-danger ml-3 mt-3">Back</div>') ?>
</div>