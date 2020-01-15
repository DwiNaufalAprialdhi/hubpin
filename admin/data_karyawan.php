<?php 
include "../koneksi.php";

?>
<!DOCTYPE html>
	<head>
	<a href="menu_admin.php">KEMBALI</a>
		<title>DATA USER/PENGGUNA</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">

			td{
				text-align: center;
				font-size: 13px;
			}

		</style>

		<script type="text/javascript">
		function konfirmasi () {
			tanya = confirm("Anda Yakin Menghapus ?");
			if (tanya == true) return true;
			else return false;
		}


		</script>
	</head>
	
	<body bgcolor="aquamarine">
				
		<center>
		<h4>DATA ADMIN RESTAURANT</h4>
					<td width="70%">
					<table border='1' cellpadding='5' align='center'>
					<border='1' cellpadding='5' align='center'>
						<tr>
							<td><b>ID_ADMIN</b></td>
							<td><b>USERNAME</b></td>
							<td><b>PASSWORD</b></td>
							<td><b>NAMA</b></td>
							<td><b>NO TELEPON</b></td>
						</tr>
						<?php
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
						$sql="select * from admin";
						$query= mysqli_query($db_conn,$sql);
						while($data = mysqli_fetch_array($query))
						{
							echo"
									<tr>
										<td>ADM000$data[id_admin]</td>
										<td>$data[username]</td>
										<td>$data[password]</td>
										<td>$data[nama]</td>
										<td>$data[telp]</td>
										
										
	
										<td>
											<a onclick='return konfirmasi()' href='hapus.php?id=$data[id]'>HAPUS |</a>
											<a onclick='return konfirmasi('apakah anda ingin mengedit?')' href='edit.php?id=$data[id]'>EDIT</a>
										</td>
										<td><a href='print_barang.php?idprint=<?php echo $data[id]?'>PRINT</a></td>
									</tr>
									
							";
						}
						?>
						
						</table>
			</center>
	</body>
</html>
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<?php 
include "../koneksi.php";

?>
<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">

			td{
				text-align: center;
				font-size: 13px;
			}

		</style>

		<script type="text/javascript">
		function konfirmasi () {
			tanya = confirm("Anda Yakin Menghapus ?");
			if (tanya == true) return true;
			else return false;
		}


		</script>
	</head>
	
	<body bgcolor="aquamarine">
				
		<center>
		<h4>DATA KASIR</h4>
					<td width="70%">
					<table border='1' cellpadding='5' align='center'>
					<border='1' cellpadding='5' align='center'>
						<tr>
							<td><b>ID_KASIR</b></td>
							<td><b>USERNAME</b></td>
							<td><b>PASSWORD</b></td>
							<td><b>NAMA</b></td>
							<td><b>NO TELEPON</b></td>
						</tr>
						<?php
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
						$sql="select * from kasir";
						$query= mysqli_query($db_conn,$sql);
						while($data = mysqli_fetch_array($query))
						{
							echo"
									<tr>
										<td>KSR000$data[id_kasir]</td>
										<td>$data[username]</td>
										<td>$data[password]</td>
										<td>$data[nama]</td>
										<td>$data[telp]</td>
										
										
	
										<td>
											<a onclick='return konfirmasi()' href='hapus.php?id=$data[id]'>HAPUS |</a>
											<a onclick='return konfirmasi('apakah anda ingin mengedit?')' href='edit.php?id=$data[id]'>EDIT</a>
										</td>
										<td><a href='print_barang.php?idprint=<?php echo $data[id]?'>PRINT</a></td>
									</tr>
									
							";
						}
						?>
						
						</table>
			</center>
	</body>
</html>
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
<?php 
include "../koneksi.php";

?>
<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">

			td{
				text-align: center;
				font-size: 13px;
			}

		</style>

		<script type="text/javascript">
		function konfirmasi () {
			tanya = confirm("Anda Yakin Menghapus ?");
			if (tanya == true) return true;
			else return false;
		}


		</script>
	</head>
	
	<body bgcolor="aquamarine">
				
		<center>
		<h4>DATA PELANGGAN
					<td width="70%">
					<table border='1' cellpadding='5' align='center'>
					<border='1' cellpadding='5' align='center'>
						<tr>
							<td><b>ID_PELANGGAN</b></td>
							<td><b>USERNAME</b></td>
							<td><b>PASSWORD</b></td>
							<td><b>NAMA</b></td>
							<td><b>NO TELEPON</b></td>
						</tr>
						<?php
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
						$sql="select * from owner";
						$query= mysqli_query($db_conn,$sql);
						while($data = mysqli_fetch_array($query))
						{
							echo"
									<tr>
										<td>PLG000$data[id_owner]</td>
										<td>$data[username]</td>
										<td>$data[password]</td>
										<td>$data[nama]</td>
										<td>$data[telp]</td>
										
										
	
										<td>
											<a onclick='return konfirmasi()' href='hapus.php?id=$data[id]'>HAPUS |</a>
											<a onclick='return konfirmasi('apakah anda ingin mengedit?')' href='edit.php?id=$data[id]'>EDIT</a>
										</td>
										<td><a href='print_barang.php?idprint=<?php echo $data[id]?'>PRINT</a></td>
									</tr>
									
							";
						}
						?>
						
						</table>
			</center>
	</body>
</html>