<?php
    include "../../koneksi.php";
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$telepon=$_POST['telepon'];
	$kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $kelompok=$_POST['kolompok'];
    $level=$_POST['level'];
    $is_verified=$_POST['is_verified'];

	
	$sql = "UPDATE register_company_user SET nama = '$nama', telepon = '$telepon', kelas = '$kelas', jurusan = '$kelompok', level = '$level', is_verified = '$is_verified' WHERE id = '$id';";
	$query = mysqli_query($db_conn,$sql);
	if($query)
	{
	header('location:../index6.php');
	}
	else
	{
	echo "Edit gagal";
	}
?>