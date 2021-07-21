<div class="container-fluid">
	
	<div class="card bg-light">
  <h5 class="card-header"><i class="fas fa-eye ">  BUKTI PEMBAYARAN</i></h5>
  <div class="card-body">

<?php foreach($invoice as $inv) : ?>
    <div class="row">
    	<div class="col-md-4"></div>
    <div class="col-md-3">
    		<img src="<?php echo base_url().'/uploads/'.$inv->bukti?>" class="card-img-top">
    	</div>

    </div>
<?php endforeach; ?>

  </div>
</div>
<?php echo anchor('admin/dashboard_admin/edit/'. $inv->id, '<div class="btn btn-primary btn-sm mt-3" ><i class="fas fa-edit"> Tindakan</i> </div>')?> 
<?php echo anchor('admin/konfir_bayar/', '<div class="btn btn-danger btn-sm  mt-3 ml-2">Back</div>') ?>
</div>