<?php
include ("koneksi.php");


if(isset($_POST['update']))
{   
       $kode = $_POST['kode_mk'];
       $nama_matkul = $_POST['nama_mk'];
       $sks = $_POST['sks'];
    
    $result = mysqli_query($db, "UPDATE matakuliah SET nama_mk='$nama_matkul',sks='$sks' WHERE kode_mk = $kode");

   
    header("Location: tampil_matkul.php");
}
?>
<?php

$kode = $_GET['kode_mk'];


$result = mysqli_query($db, "SELECT * FROM matakuliah WHERE kode_mk = $kode");

while($user_data = mysqli_fetch_array($result))
{
        $nama_matkul = $user_data['nama_mk'];
        $sks = $user_data['sks'];
}
?>
<html>
<head>  
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<center><h1>Edit Mata Kuliah</h1></center>

    <form name="update_user" method="post" action="edit_mhs.php">
        <table border="0">
        <table align='center'>
           <tr> 
                <td>Nama Mata Kuliah</td>
                <td><input type="text" name="nama_mk"  autocomplete='off' value=<?php echo $nama_matkul;?>></td>
            </tr>
            <tr>
            <td>SKS</td>
                <td><input type="text" name="sks"  autocomplete='off' value=<?php echo $sks;?>></td>
            </tr>
             <tr>
                <td><input type="hidden" name="kode_mk" value=<?php echo $_GET['kode_mk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>