<?php
    include "../koneksi.php";
    session_start();
    $username=$_SESSION['username'];


    $sql2 = "SELECT *FROM user WHERE username ='$username'";
    $query2= mysqli_query($db_conn,$sql2);	
    $data2 = mysqli_fetch_array($query2);
    $id_user= $data2['id'];
    $nama= $data2['nama'];
    $telepon= $data2['telepon'];
    $kelas= $data2['kelas'];
    $jurusan= $data2['jurusan'];
    $kelompok= $data2['kelompok'];
    $level= $data2['level'];

    $id=$_GET['id'];
    $sql = "SELECT *FROM tambah_siswa WHERE id ='$id'";
    $query= mysqli_query($db_conn,$sql);	
    $data = mysqli_fetch_array($query);
    $nama_perusahaan= $data['nama'];

    $sql3= "insert into register_company_user 
    (id_user,id_perusahaan, nama_perusahaan, nama, telepon, kelas, jurusan, kelompok, level) 
	values('$id_user','$id','$nama_perusahaan','$nama','$telepon','$kelas','$jurusan','$kelompok','$level');";
	$query3  =mysqli_query($db_conn,$sql3);
	if($query3)
	{
		header('location:index.php');
	}
	else
	{
	echo"Gagal menyimpan data";
	}
?>