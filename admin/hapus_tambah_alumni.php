<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE from tambah_alumni where id='$id'";
mysqli_query($db_conn, $query);
header("location:index4.php");
?>