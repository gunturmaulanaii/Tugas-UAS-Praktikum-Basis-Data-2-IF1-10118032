<?php
include "koneksi.php";
$nim = $_POST['nim'];
$kode = $_POST['kode_mk'];
$nilai = $_POST['nilai'];

$query = "INSERT INTO `perkuliahan` (`nim`, `kode_mk`, `nilai`) VALUES ('$nim', '$kode', '$nilai')";

$hasil = mysqli_query($db, $query);
header('location: tampil_pk.php');
?>