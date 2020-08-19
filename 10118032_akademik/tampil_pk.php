<?php
include 'koneksi.php';
?>

<title>Form Perkuliahan</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<table align='center'>

	<center><h1>Form Perkuliahan</h1></center>


<br><form action="tambah_pk.php" method="POST">
<button class="tombol">Tambah Perkuliahan</button>
</form>
<form action="index.php" method="POST">
<button class="tombol">Home</button><br><br>

	<tr>
		<th>NIM</th>
		<th>Kode Mata Kuliah</th>
		<th>Nilai</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$read = "SELECT * FROM `perkuliahan`"; 
	 $query = mysqli_query($db, $read);
	 $a = 0;
	 while($row = mysqli_fetch_array($query)){
	 	$nim = $row['nim'];
	 	$kode = $row['kode_mk'];
	 	$nilai = $row['nilai'];
    ?>

    <tr>
    	<td><?php print($nim);?></td>
    	<td><?php print($kode);?></td>
    	<td><?php print($nilai);?></td>
    	<td><a href="delete_pk.php?nim=<?php print($nim);?>">Delete</a></td>
    	<td><a href="edit_pk.php?nim=<?php print($nim);?>">Edit</a></td>
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