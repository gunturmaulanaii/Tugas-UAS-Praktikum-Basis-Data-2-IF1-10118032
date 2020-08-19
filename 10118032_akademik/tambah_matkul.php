<?php
include ('koneksi.php');
?>

<title>Tambah Mata Kuliah</title>
<link rel="stylesheet" type="text/css" href="style3.css">

<fieldset>
	<form action="simpan_matkul.php" method="POST">
		<legend>Tambah Mata Kuliah</legend>
		<label>Kode Mata Kuliah</label><br>
		<input type="text" name="kode" autocomplete='off'><br>

		<label>Nama Mata Kuliah</label><br>
		<input type="text" name="nama_mk" autocomplete='off'><br>

		<label>SKS</label><br>
		<input type="text" name="sks" autocomplete='off'><br>
		
		<input type="submit" name="Submit" value="Simpan Data">

	</form>

</fieldset>