<?php
include ("koneksi.php");


if(isset($_POST['update']))
{   
        $nim = $_POST['nim'];
        $nama = $_POST['nama_mhs'];
        $jurusan = $_POST['jurusan'];
        $kelas = $_POST['kelas'];

    
    $result = mysqli_query($db, "UPDATE mahasiswa SET nama_mhs='$nama_mhs',jurusan='$jurusan',kelas='$kelas' 
                           WHERE nim = $nim");

   
    header("Location: tampil_mhs.php");
}
?>
<?php

$nim = $_GET['nim'];


$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nim = $nim");

while($user_data = mysqli_fetch_array($result))
{
        $nama_mhs = $user_data['nama_mhs'];
        $jurusan = $user_data['jurusan'];
        $kelas = $user_data['kelas'];
        
}
?>
<html>
<head>  
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<center><h1>Edit Mahasiswa</h1></center>

    <form name="update_user" method="post" action="edit_mhs.php">
        <table border="0">
        <table align='center'>
            <tr> 
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama" autocomplete='off' value=<?php echo $nama_mhs;?>></td>
            </tr>
            <tr>
            <td>Jurusan</td>
                <td><input type="text" name="jurusan" autocomplete='off' value=<?php echo $jurusan;?>></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" autocomplete='off' value=<?php echo $kelas;?>></td>
            </tr> 
               
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>