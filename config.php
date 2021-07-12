<?php
/* Konfigurasi */
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'datakaryawan');

$koneksi = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal. Pesan error : " . mysqli_connect_error();
}
