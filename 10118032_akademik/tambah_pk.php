<?php
include ('koneksi.php');
?>
<title>Tambah Perkuliahan</title>
<link rel="stylesheet" type="text/css" href="style3.css">

<fieldset>
	<form action="simpan_pk.php" method="POST">
		<legend>Tambah Perkuliahan</legend>
		<label>NIM</label><br>
		<input type="text" name="nim" autocomplete='off'><br>

		<label>Kode Mata Kuliah</label><br>
		<input type="text" name="kode" autocomplete='off'><br>

		<label>Nilai</label><br>
		<input type="text" name="nilai" autocomplete='off'><br>
		
		<input type="submit" name="Submit" value="Simpan Data">

	</form>

</fieldset>