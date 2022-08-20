<?php
$host = "localhost";
$user = "id19440937_root";
$pass = "R4<YKIT5sm[T^+v[";
$db   = "id19440937_app_covid";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
	die("Koneksi gagal:".mysqli_connect_error());
}
?>