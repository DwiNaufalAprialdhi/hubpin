<?php
    include "../koneksi.php";
    session_start();
    $username=$_SESSION['username'];

    $sql2 = "SELECT *FROM alumni WHERE username ='$username'";
    $query2= mysqli_query($db_conn,$sql2);	
    $data2 = mysqli_fetch_array($query2);
    $id_alumni= $data2['id'];
    $nama= $data2['nama'];
    $alamat= $data2['alamat'];
    $telepon= $data2['telepon'];
    $keahlian= $data2['keahlian'];
    $file_cv= $data2['file_cv'];
    $tahun_lulus= $data2['tahun_lulus'];

    $id=$_GET['id'];
    $sql = "SELECT *FROM tambah_alumni WHERE id ='$id'";
    $query= mysqli_query($db_conn,$sql);	
    $data = mysqli_fetch_array($query);
    $nama_perusahaan= $data['nama'];

	$sql2= "insert into register_company (id_alumni,id_perusahaan,nama_perusahaan,nama,alamat,telepon,keahlian,file_cv,tahun_lulus) 
	values('$id_alumni','$id','$nama_perusahaan','$nama','$alamat','$telepon','$keahlian','$file_cv','$tahun_lulus');";
	$query  =mysqli_query($db_conn,$sql2);
	if($query)
	{
		header('location:index.php');
	}
	else
	{
	echo"Gagal menyimpan data";
	}
?>