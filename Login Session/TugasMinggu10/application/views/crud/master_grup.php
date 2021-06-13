<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>

<div class="container-fluid">
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables Grup</h6></div>
		<div class="card-body"><div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><!--untuk membuat tabel-->
				<thead>
					<tr><th>No</th><!--membuat judul kolom-->
						<th>Username</th>
						<th>Nama</th>
						<th>Password</th>
						<th>Grup</th>
						<th></th></tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th> 
						<th>Username</th>
						<th>Nama</th>
						<th>Password</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$no = 1;
					foreach ($user as $baris) { // untuk melakukan perulangan
						?>
					<tr><td><?php echo $no++; ?></td> <!-- untuk memberikan nomer-->
						<td><?php echo $baris->username ?></td>
						<td><?php echo $baris->nama ?></td>
						<td><?php echo $baris->password ?></td>
						<td><?php echo $baris->grup ?></td> <!-- untuk memnggil data dari field username-->
					<td><?php
						
							echo '<a href="'.base_url('Mahasiswa/edit_grup/'.$baris->id).'" class="fa fa-edit"></a>';
							echo "";
						echo '<a href="'.base_url('Mahasiswa/hapus_grup/'.$baris->id).'" class="fa fa-times"></a>';
						
					?></td>
					</tr>

					
					<?php } ?>
				</tbody>
			</table>	
			<a href="<?php echo base_url('Mahasiswa/tambah_grup')?>" class="btn btn-success btn-icon-split"><!-- untuk mberpindah ke tampilan tambah_mahasiswa-->
			<span class="text">Tambah Data</span></a>		
		</div>
	</div>
	</div>
</div>
