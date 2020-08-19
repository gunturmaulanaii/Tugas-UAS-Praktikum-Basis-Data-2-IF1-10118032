<?php
include "koneksi.php";
$kode = $_POST['kode_mk'];
$nama_mk = $_POST['nama_mk'];
$sks = $_POST['sks'];

$query = "INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `sks`) VALUES ('$kode', '$nama_mk', '$sks')";

$hasil = mysqli_query($db, $query);
header('location: tampil_matkul.php');
?>