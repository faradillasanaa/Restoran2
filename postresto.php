<?php

include 'koneksiresto.php';

$nama = $_POST['Nama'];
$email = $_POST['Email'];
$alamat = $_POST['Alamat'];
$username = $_POST['Username'];
$password = $_POST['Password'];

$query = "INSERT INTO login (Nama, Alamat, Username, Password) VALUES ('$nama', '$email', '$alamat', '$username', '$password')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil tambah data";
    header("location : resto.php");
}else{
    echo "Gagal tambah data";
}
?>