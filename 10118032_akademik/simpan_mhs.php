<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama_mhs'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `jurusan`, `kelas`) VALUES ('$nim', '$nama', '$jurusan', '$kelas')";

$hasil = mysqli_query($db, $query);
header('location: tampil_mhs.php');
?>