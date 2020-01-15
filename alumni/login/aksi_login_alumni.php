<?php
session_start();
include "../../koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($db_conn, "SELECT * FROM alumni WHERE username= '$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header('location:../index.php');
} else {
	echo "<center>Login Gagal! Username dan Password Salah!!<br>";
	echo "<a href = login/alumni_login.php><b>Ulangi Lagi</b></a></center>";
}
?>