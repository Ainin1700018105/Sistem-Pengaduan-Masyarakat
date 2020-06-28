<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1></h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Topik Aduan</th>
			<th>Kecamatan</th>
			<th>Alamat</th>
			<th>Tanggal Aduan</th>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->topik ?></td>
			<td><?php echo $u->kecamatan ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->tanggal ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>