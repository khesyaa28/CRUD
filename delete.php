<?php

include './connect.php';

$NIK = $_GET['NIK'];
$query = "DELETE FROM data_penduduk WHERE NIK = '$NIK'";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);


if ($num > 0){
    echo "Berhasil Hapus Data <br>";

} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='showmain.php'>Lihat Data</a>";
?>