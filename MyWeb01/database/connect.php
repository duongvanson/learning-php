<?php 
	$server = "root";
	$pass = "";
	$host = "localhost";
	$database = "myweb01";
	$conn = mysqli_connect($host, $server, $pass, $database);
	mysqli_query($conn, "SET NAMES 'UTF-8'");
 ?>