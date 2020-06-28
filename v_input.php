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
  <center><h2>Form Pengaduan Masyarakat Publik Berbasis Online </h2></center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" class="table table-primary">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input type="nama" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" placeholder="Masukkan email anda" name="email">
			</div>
			<div class="form-group">
				<label for="topik">Topik Aduan :</label>
				<input type="topik" class="form-control" id="topik" placeholder="Ceritakan aduan anda" name="topik">
			</div>

			<div class="form-group">
				<label for="kecamatan">Kecamatan :</label>
				<input type="kecamatan" class="form-control" id="kecamatan" placeholder="Masukkan kecamatan anda" name="kecamatan">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat :</label>
				<input type="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat">
			</div>

			<div class="form-group">
				<label for="tanggal">Tanggal Aduan :</label>
				<input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal aduan" name="tanggal">
			</div>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-danger btn-block" value="Submit"></td>
			</tr>
		</table>
	</form>	
</body>
</html>