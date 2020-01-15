<?php
include "../../koneksi.php";

?>
<!DOCTYPE html>
	<head>
		<title>Data Alumni</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">

			td{
				text-align: center;
				font-size: 13px;
			}

		</style>
	</head>

	<body bgcolor="#B8E0ED">

		<center>
		<h4>Data Alumni</h4>
					<td width="70%">
					<table border='1' cellpadding='5' align='center'>
						<tr>
							<td><b>No</b></td>
                            <td><b>Nama</b></td>
							<td><b>Alamat</b></td>
							<td><b>Tahun_Lulus</b></td>
							<td><b>Keahlian</b></td>
							<td><b>Username</b></td>
							<td><b>Password</b></td>
							<td><b>File_cv</b></td>
							<td><b>Download CV</b></td>

							</tr>
						<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$sql = "select * from alumni";
$query = mysqli_query($db_conn, $sql);
$i = 0;
while ($data = mysqli_fetch_array($query)) {
	$i++;
	echo "
									<tr>
										<td>$i</td>
										<td>$data[nama]</td>
										<td>$data[alamat]</td>
										<td>$data[tahun_lulus]</td>
										<td>$data[keahlian]</td>
										<td>$data[username]</td>
										<td>$data[password]</td>
										<td>$data[file_cv]</td>
										<td><a href=\"simpan.php?file=$data[file_cv]\">Download File</a></td>
									</tr>

							";
}
?>
						</table>





			</center>
	</body>
</html>