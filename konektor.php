<?php

// konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbblog";

// melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
	echo "Gagal konek: " . die(mysqli_error($koneksi));
}
