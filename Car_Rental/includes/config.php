<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname ="cars";
	
	$conn = new mysqli($host, $user, $pass, $dbname);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>
