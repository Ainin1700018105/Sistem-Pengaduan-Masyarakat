<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">SPMBO</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="<?php echo site_url('login/logout')?>" class="btn btn-primary my-2 my-sm-0" type="button">LogOut</a>
			</form>
		</div>
	</nav>
              
  <table class="table table-primary table-striped">
	
	
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Topik Aduan</th>
			<th>Kecamatan</th>
			<th>Alamat</th>
			<th>Tanggal Aduan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->topik ?></td>
			<td><?php echo $u->kecamatan ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->tanggal ?></td>
			<td>
			    <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>