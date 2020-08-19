<?php
include 'koneksi.php';
?>

<title>Form Mata Kuliah</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<table align='center'>

	<center><h1>Form Mata Kuliah</h1></center>

<br><form action="tambah_matkul.php" method="POST">
<button class="tombol">Tambah Mata Kuliah</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button><br><br>

	<tr>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$read = "SELECT * FROM `matakuliah`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$kode = $row['kode_mk'];
	 	$nama_matkul = $row['nama_mk'];
	 	$sks = $row['sks'];
	 
    ?>
<title>Form Mata Kuliah</title>
<link rel="stylesheet" type="text/css" href="style2.css">

    <tr>
    	<td><?php print($kode);?></td>
    	<td><?php print($nama_matkul);?></td>
    	<td><?php print($sks);?></td>
    	<td><a href="delete_matkul.php?kode_mk=<?php print($kode);?>">Delete</a></td>
    	<td><a href="edit_matkul.php?kode_mk=<?php print($kode);?>">Edit</a></td>
    </tr>


    <?php
    $a++;
   	}
   	?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
	<h6><i>@GUNTUR MAULANA IBRAHIM (10118032) IF 1</i></h6>
</form>