<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE from tambah_siswa where id='$id'";
mysqli_query($db_conn, $query);
header("location:index3.php");
?>