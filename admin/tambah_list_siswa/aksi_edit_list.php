<?php
    include "../../koneksi.php";
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat=$_POST['alamat'];
	$notelp=$_POST['notelp'];
    $email=$_POST['email'];
    $jarak=$_POST['jarak'];
    $deskripsi=$_POST['deskripsi'];


	
	$sql = "UPDATE tambah_siswa SET nama = '$nama', alamat = '$alamat', notelp = '$notelp', email = '$email', jarak = '$jarak' , deskripsi = '$deskripsi' WHERE id = '$id';";
	$query = mysqli_query($db_conn,$sql);
	if($query)
	{
	header('location:../index3.php');
	}
	else
	{
	echo "Edit gagal";
	}
?>