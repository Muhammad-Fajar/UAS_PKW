<?php
require_once './config.php';

$nama = $_POST['nama'];
$noktp = $_POST['noktp'];
$telp = $_POST['telp'];
$masuk = $_POST['masuk'];
$selisih = $_POST['selisih'];

$result = $koneksi->
    query("INSERT INTO karyawan VALUES(' ','$nama', '$noktp', '$telp', '$masuk', '$selisih')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>