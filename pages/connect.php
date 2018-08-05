<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'emmanuel'; // Password
$db_name = 'info'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
	  FROM logs';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
