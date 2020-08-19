<?php
include 'koneksi.php';
?>

<title>Form Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<table align='center'>

	<center><h1>Form Mahasiswa</h1></center>

<br><form action="tambah_mhs.php" method="POST">
<button class="tombol">Tambah Mahasiswa</button>
</form>
<form action="index.php" method="POST"> 
<button class="tombol">Home</button><br><br>


	<tr>
		<th>NIM</th>
		<th>Nama Mahasiswa</th>
		<th>Jurusan</th>
		<th>Kelas</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$read = "SELECT * FROM `mahasiswa`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$nim = $row['nim'];
	 	$nama = $row['nama_mhs'];
	 	$jurusan = $row['jurusan'];
	 	$kelas = $row['kelas'];
    ?>

    <tr>
    	<td><?php print($nim);?></td>
    	<td><?php print($nama);?></td>
    	<td><?php print($jurusan);?></td>
    	<td><?php print($kelas);?></td>
    	<td><a href="delete_mhs.php?nim=<?php print($nim);?>">Delete</a></td>
    	<td><a href="edit_mhs.php?nim=<?php print($nim);?>">Edit</a></td>
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
<br>
<br>
<br>
<br>
<center>
	<h6><i>@GUNTUR MAULANA IBRAHIM (10118032) IF 1</i></h6>
</form>