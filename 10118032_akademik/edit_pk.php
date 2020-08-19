<?php
include ("koneksi.php");
if(isset($_POST['update']))
{   
        $nim = $_POST['nim'];
        $kode = $_POST['kode_mk'];
        $nilai = $_POST['nilai'];


    $result = mysqli_query($db, "UPDATE perkuliahan SET nama_mk='$nama_mk',nilai='$nilai' WHERE nim = $nim");


    header("Location: tampil_pk.php");
}
?>
<?php

$nim = $_GET['nim'];


$result = mysqli_query($db, "SELECT * FROM perkuliahan WHERE nim = $nim");

while($user_data = mysqli_fetch_array($result))
{
        $kode = $user_data['kode_mk'];
        $nilai = $user_data['nilai'];
}
?>
<html>
<head>  
    <title>Edit Perkuliahan</title>
     <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<center><h1>Edit Perkuliahan</h1></center>


    <form name="update_user" method="post" action="edit_pk.php">
        <table border="0">
        <table align='center'>
            <tr> 
                <td>Kode Mata Kuliah</td>
                <td><input type="text" name="kode_mk" autocomplete='off' value=<?php echo $kode;?>></td>
            </tr>
            <tr>
            <td>nilai</td>
                <td><input type="text" name="nilai" autocomplete='off' value=<?php echo $nilai;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="kode_mk" value=<?php echo $_GET['kode_mk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</html>