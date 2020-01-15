<?php
include "../koneksi.php";

$id = $_GET['id'];

$query = "DELETE from register_company_user where id='$id'";
mysqli_query($db_conn, $query);
header("location:index6.php");
?>