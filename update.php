<?php

include './connect.php';

$NIK =$_POST ['NIK'];
$Nama = $_POST['Nama'];
$Kota = $_POST['Kota'];
$Password = $_POST['Password'];


$query = "UPDATE data_penduduk SET Nama = '$Nama', Kota = '$Kota', Password = '$Password' WHERE NIK = '$NIK' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if ($num > 0){
    echo "Berhasil Update Data <br>";

} else {
    echo "Gagal Update Data <br>";
}
echo "<a href='showmain.php'>Lihat Data</a>";
?>