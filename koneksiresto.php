<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "regisresto";

$connect = mysqli_connect($host, $username, $password, $db);
if(!$connect){
    echo "Koneksi gagal : " . mysqli_connect_error();
}