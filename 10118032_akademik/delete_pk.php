<?php
include ("koneksi.php");
$nim = $_GET['nim'];
$result = mysqli_query($db, "DELETE FROM perkuliahan WHERE nim=$nim");
header("Location:tampil_mhs.php");
?>