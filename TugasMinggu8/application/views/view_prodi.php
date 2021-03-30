<html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar Prodi Jurusan Teknologi Informasi</h2>
<table class="table table-bordered table-striped">
	<thead>
<tr>
<th>No</th>
<th>Prodi</th>
<th>Keterangan</th>
</tr>
</thead>
<tbody>
<?php $no = 0; foreach($Prodi as $row):
	$no++;
	$pr=$row['prodi'];
	$ket=$row['Keterangan'];?>


<tr>
	<td><?php echo $no?></td>
	<td><?php echo $pr?></td>
	<td><?php echo $ket?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>


