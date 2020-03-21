<?php
include "connect.php";

$NIK=$_POST['NIK'];
$Nama=$_POST['Nama'];
$TTL=$_POST['TTL'];
$Kota=$_POST['Kota'];
$Password=$_POST['Password'];
$query = "INSERT INTO data_penduduk (NIK,Nama,TTL,Kota,Password)
          VALUES ('$NIK','$Nama', '$TTL', '$Kota', '$Password')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);


if($num > 0){
    echo "Berhasil Menambah Data";
}else{
    echo "GAGAL";
}

    echo "<a href='showmain.html'>Lihat Data</a>";