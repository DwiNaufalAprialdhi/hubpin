<html>
<head>
<title></title>
</head>
<body>
<?php include "../koneksi.php"?>
<form action='aksi_tambah.php' method='GET'>
	<h3>REGISTER</h3>
<table border="0">
	<tr>
	  <td>NAMA LENGKAP</td><td>:</td><td><input type='text' name='nama' id="nama"></td>
	</tr>
	<tr>
	  <td>USERNAME</td><td>:</td><td><input type='username' name='username' id="username"></td>
	</tr>
	<tr>
	  <td>PASSWORD</td><td>:</td><td><input type='password' name='password' id="password"></td>
	</tr>
	<tr>
	  <td>TELEPHONE</td><td>:</td><td><input type='text' name='telp' id="telp"></td>
	</tr>
	<tr>
	<td colspan="3">
	   <div align="center">
	      <input type='hidden' name='id' value="<?php echo "$data[id]";?>"><input type='submit' value='DAFTAR SEKARANG BOSS'>
	   </div>
	</td>
	</tr>
</table>
</form>
		<body>
	</html>
	