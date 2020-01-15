<?php
    include "../../koneksi.php";
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
    $tahun_lulus=$_POST['tahun_lulus'];
    $keahlian=$_POST['keahlian'];
    $file_cv=$_POST['file_cv'];
    $is_verified=$_POST['is_verified'];

	
	$sql = "UPDATE register_company SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', tahun_lulus = '$tahun_lulus', keahlian = '$keahlian', file_cv = '$file_cv', is_verified = '$is_verified' WHERE id = '$id';";
	$query = mysqli_query($db_conn,$sql);
	if($query)
	{
	header('location:../index5.php');
	}
	else
	{
	echo "Edit gagal";
	}
?>