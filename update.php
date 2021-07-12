<?php
include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$noktp = $_POST['noktp'];
$telp = $_POST['telp'];
$masuk = $_POST['masuk'];
$selisih = $_POST['selisih'];

mysqli_query($koneksi, "update karyawan set nama='$nama', noktp='$noktp', telp='$telp', masuk='$masuk', selisih='$selisih' where id='$id'");
header("location:index.php");