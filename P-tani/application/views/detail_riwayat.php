<div class="container-fluid">
	<h4><i class="fas fa-info-circle mr-3"></i>DETAIL RIWAYAT BELANJA </h4>
<div class="btn btn-sm btn-success mb-3">No. Invoice: <?php  echo $riwayat->id ?></div>
<div class="btn btn-sm btn-info mb-3">No. Resi: <?php  echo $riwayat->noresi ?></div>
<table class="table table-bordered table-hover table-striped">
	
<tr>
	<th>ID PRODUK</th>
	<th>NAMA PRODUK</th>
	<th>JUMLAH PESANAN</th>
	<th>HARGA SATUAN</th>
	<th>SUB TOTAL</th>
</tr>

<?php 
$total = 0;
foreach ($pesanan as $psn) :
	$subtotal = $psn->jumlah * $psn->harga;
	$total 	= $subtotal;

 ?>

 	<tr>
 		<td><?php echo $psn->id_brg ?></td>
 		<td><?php echo $psn->nama_brg ?></td>
 		<td><?php echo $psn->jumlah ?></td>
 		<td><?php echo number_format($psn->harga, 0,',',',')  ?></td>
 		<td><?php echo number_format($subtotal, 0,',',',')?></td>
 	</tr>
<?php endforeach; ?>

<tr>
	<td colspan="4" align="right">Total</td>
	<td align="right">Rp. <?php echo number_format($total, 0,',',',') ?></td>

</tr>
</table>


<a href="<?php echo base_url('riwayat/index')?>"><div class="btn btn-sm btn-primary" >Back</div></a>
</div>