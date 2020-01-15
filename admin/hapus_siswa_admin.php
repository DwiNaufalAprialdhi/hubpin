<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE from user where id='$id'";
mysqli_query($db_conn, $query);
header("location:index1.php");
?>