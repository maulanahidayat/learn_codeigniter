<!DOCTYPE html>
<html>
<head>
	<title>menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
<h1>mengenal model pada codeigniter</h1>
<table border="1">
	<tr>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Pekerjaan</th>
</tr>
<?php foreach ($user as $u){?>
	<tr>
<td><?php echo $u->nama ?></td>
<td><?php echo $u->alamat ?></td>
<td><?php echo $u->pekerjaan ?></td>
</tr>
<?php	}?>	
</table>
</body>
</html>