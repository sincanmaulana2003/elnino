<?php 

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Siswa</h1>

	<a href="tambah.php">Tambah data siswa</a>
	<br><br>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>Jenis kelamin</th>
			<th>Jurusan</th>
			<th>Alamat</th>
		</tr>
	
<?php $i = 1; ?>
<?php foreach( $siswa as $row ) : ?>
	
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>

			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["jenis_kelamin"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><?= $row["alamat"]; ?></td>
		</tr>
		<?php $i++; ?>
		
<?php endforeach; ?>

	</table>
	
</body>
</html>
