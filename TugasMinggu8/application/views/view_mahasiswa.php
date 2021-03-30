<html>
<html>
<head>
	<title></title>
</head>
<body>
<table class="table table-bordered table-striped">
	<thead>
<tr>
<th>Nama</th>
	<th>Prodi</th>
</tr>
</thead>
<tbody>
<?php 
foreach($Mahasiswa as $row):
	$nm=$row['nama'];
	$pr=$row['prodi'];?>


<tr>
	<td><?php echo $nm?></td>
	<td><?php echo $pr?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>


