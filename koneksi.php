<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "db_hubpin";
$db_conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$db_conn) {
	echo "koneksigagal";
}
?>