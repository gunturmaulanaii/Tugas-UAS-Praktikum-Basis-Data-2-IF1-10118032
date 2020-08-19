<?php
include ("koneksi.php");
$nim = $_GET['nim'];
$result = mysqli_query($db, "DELETE FROM mahasiswa WHERE nim=$nim");
header("Location:tampil_mhs.php");
?>