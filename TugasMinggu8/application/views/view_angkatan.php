<html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Daftar Angkatan</h2>
<table class="table table-bordered table-striped">
	<thead>
<tr>
<th>No</th>
<th>Tahun</th>
</tr>
</thead>
<tbody>
<?php $no = 0; foreach($Angkatan as $row):
	$no++;
	$th=$row['tahun'];?>

<tr>
	<td><?php echo $no?></td>
	<td><?php echo $th?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>


