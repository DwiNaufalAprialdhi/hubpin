<!DOCTYPE html>
<html>
<head>
	<title>Kasir Restaurant</title>
</head>
<body bgcolor="gray">
	<style type="text/css">
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  img src="images/1.jpg";
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
} 
	</style>
	
<br/>
<br/>
<ul>
    <li><a href="data_karyawan.php">DATA KARYAWAN SUPERMARKET</a><br></li>
	<li><a href="REGISTRASI/REGISTRASI KASIR/tambah.php">REGISTRASI KASIR</a><br></li>
	<li><a href="REGISTRASI/REGISTRASI OWNER/tambah.php">REGISTRASI OWNER</a><br></li>
	<li><a href="BARANG/tambah.php">BARANG</a><br></li>
	<li><a href="TRANSAKSI/tambah.php">ORDER</a><br></li>
	<li><a href="TRANSAKSI/print.php">TRANSAKSI</a><br></li>
	<li><a href="logout.php">LOGOUT</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<marquee>Selamat Datang Di Admin Restaurant <b>ARDIANZ</b></marquee>
  <?php 
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}

// menampilkan pesan selamat datang
echo "Hai, selamat datang di Menu ADMIN ". $_SESSION['username'];

?>
<body img src="images/1.jpg">
  <h1>RESTAURAN ARDIANZ</h1>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</body>
</div>
</body>
</html>