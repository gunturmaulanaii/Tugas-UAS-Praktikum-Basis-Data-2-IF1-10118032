<?php
include ("koneksi.php");
$kode = $_GET['kode_mk'];
$result = mysqli_query($db, "DELETE FROM matakuliah WHERE kode_mk=$kodemk");
header("Location:tampil_matkul.php");
?>