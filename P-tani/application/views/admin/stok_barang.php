<div class="container-fluid">
	
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>SISA STOK</th>
		</tr>
		
		<?php 
			$no=1;
          foreach($barang as $brg): ?>
          	<tr>
          		<td><?php echo $no++ ?></td>
          		<td><?php echo $brg->nama_brg ?></td>
          		<td><?php echo $brg->stok?></td>
          	</tr>
          	
          	<?php endforeach;?>
	</table>
  <?php echo anchor('admin/dashboard_admin/', '<div class="btn btn-sm btn-danger">Back</div>') ?>
</div>


</div>