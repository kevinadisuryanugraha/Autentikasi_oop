<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "autentikasi_oop";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if($koneksi->connect_error) {
    var_dump($koneksi->connect_error);
    die("Koneksi bermasalah");
}

$sql = "SELECT * FROM students";
$result = $koneksi->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

var_dump($data);

?>