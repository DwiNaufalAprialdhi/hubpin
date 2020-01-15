<?php
include "../../koneksi.php";

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$notelp = $_GET['notelp'];
$email = $_GET['email'];
$jarak = $_GET['jarak'];
$deskripsi = $_GET['deskripsi'];

$sql = "insert into tambah_alumni (nama,alamat,notelp,email,jarak,deskripsi)
	values('$nama','$alamat','$notelp','$email','$jarak','$deskripsi');";
$query = mysqli_query($db_conn, $sql);
if ($query) {
	header('location:../index4.php');
} else {
	echo "Gagal Disimpan";
}
?>