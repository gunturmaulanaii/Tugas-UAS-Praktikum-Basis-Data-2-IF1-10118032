<?php
include ('koneksi.php');
?>

<title>Tambah Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="style3.css">

<fieldset>
	<form action="simpan_mhs.php" method="POST">
		<legend>Tambah Mahasiswa</legend>
		<label>NIM</label><br>
		<input type="text" name="nim" autocomplete='off'><br>

		<label>Nama Mahasiswa</label><br>
		<input type="text" name="nama" autocomplete='off'><br>

		<label>Jurusan</label><br>
		<input type="text" name="jurusan" autocomplete='off'><br>
		</select>

		<label>Kelas</label><br>
		<input type="text" name="kelas" autocomplete='off'><br>
		
		<br><input type="submit" name="Submit" value="Simpan Data"><br>

	</form>

</fieldset>