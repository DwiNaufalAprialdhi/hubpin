<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE from alumni where id='$id'";
mysqli_query($db_conn, $query);
header("location:index2.php");
?>