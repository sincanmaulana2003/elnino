<?php 
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

	// ambil data dari tiap elemen dalam from

	$nama = $_POST["nama"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$jurusan = $_POST["jurusan"];
	$alamat = $_POST["alamat"];
	$gambar = $_POST["gambar"];


	// query insert data
	$query = "INSERT INTO siswa
					VALUES
				('', '$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$gambar')
			";

	mysqli_query($conn, $query);

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah data siswa</title>
</head>
<body>

	<h1>Tambah data siswa</h1>

	<form action="" method="post">
		
	<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
		</li>
		<li>
			<label for="jenis_kelamin">Jenis kelamin :</label>
			<input type="text" name="jenis_kelamin" id="jenis_kelamin">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="alamat">Alamat :</label>
			<input type="text" name="alamat" id="alamat">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</li>
		
			<button type="submit" name="submit">
				Tambah data
			</button>
		
	</ul>

	</form>
	
</body>
</html>