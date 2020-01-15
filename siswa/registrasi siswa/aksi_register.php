<?php
include "../../koneksi.php";

$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$telepon = $_GET['telepon'];
$kelas = $_GET['kelas'];
$jurusan = $_GET['jurusan'];
$kelompok = $_GET['kelompok'];
$level = $_GET['level'];

$sql = "insert into user (nama,username,password,telepon,kelas,jurusan,kelompok,level)
	values('$nama','$username','$password','$telepon','$kelas','$jurusan','$kelompok','$level');";
$query = mysqli_query($db_conn, $sql);
if ($query) {
	header('location:../login/index.php');
} else {
	echo "Gagal Disimpan";
}
?>