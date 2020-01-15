<?php
include "../../koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$tahun_lulus = $_POST['tahun_lulus'];
$keahlian = $_POST['keahlian'];
$username = $_POST['username'];
$password = $_POST['password'];
$lokasi_file = $_FILES['file_cv']['tmp_name'];
$file_cv = $_FILES['file_cv']['name'];

// Tentukan folder untuk menyimpan file

$folder = "files/$file_cv";

$upload = move_uploaded_file($lokasi_file, "$folder");

$sql = "insert into alumni (nama,alamat,telepon,tahun_lulus,keahlian,username,password,file_cv)
	values('$nama','$alamat','$telepon','$tahun_lulus','$keahlian','$username','$password','$file_cv');";
$query = mysqli_query($db_conn, $sql);
if ($query) {
	header('location:../login/alumni_login.php');
} else {
	echo "Gagal Disimpan";
}
?>