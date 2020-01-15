<?php
include "../../koneksi.php";

$id = $GET_['id'];

$query = "DELETE from tambah_siswa where id='$id'";
mysqli_query($db_conn, $query);
header("location:index1.php");
?>