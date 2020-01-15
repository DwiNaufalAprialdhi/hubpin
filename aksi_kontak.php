<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$judul = $_POST['judul'];
$pesan = $_POST['pesan'];

$sql = "insert into kontak (nama,email,judul,pesan)
	values('$nama','$email','$judul','$pesan');";
$query = mysqli_query($db_conn, $sql);
if ($query) {
	header('location:index.php');
} else {
	echo "Gagal Disimpan";
}
?>