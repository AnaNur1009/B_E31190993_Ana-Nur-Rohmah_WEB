<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang=$this->cart->contents()) 
					{
						foreach ($keranjang as $item)
						{
							$grand_total = $grand_total + $item['subtotal'];
						}

						echo "<h4>Total Belanja : Rp.". number_format($grand_total, 0,',','.');
							
							?>
			</div><br><br>
			<h3>Pembayaran COD</h3>
			<form method="post" action="<?php echo base_url()?>dashboard1/pesanan">
				
				<div class="form-group">
					<label>Nama Lengkap </label>
					<input type="teks" name="nama" placeholder="Masukan Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="teks" name="alamat" placeholder="Masukan Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No Telepon</label>
					<input type="teks" name="telp" placeholder="Masukan No Telp Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Email</label>
					<input type="teks" name="email" placeholder="Masukan Alamat Email Anda" class="form-control">

					<div class="form-group mt-3">
					<label>Permintaan Metode Pembayaran</label>
					<input type="teks" name="metode" placeholder="COD" class="form-control">


				<div class="form-group">
					<button type="submit" class="btn btn-sm btn-primary mb-3 mt-3">Pesan</button>
					
				</div>
				
				</div>
				
			</form>
			<?php 
		}else
		{
			echo "<h4>Silahkan Lakukan Proses Belanja Terlebih Dahulu" ;
		}
			?>

		</div>

		<div class="col-md-2"></div>
	</div>
</div>