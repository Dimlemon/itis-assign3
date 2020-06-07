<?php
	$host = 'itis-mysql.cjucfbmanull.us-east-1.rds.amazonaws.com';
	$user = 'admin';
	$pass = 'mysql12345';

	$conn = new mysqli($host, $user, $pass);
	if($conn -> connect_error){
		die("connect_error" . $conn->connect_error);
		
	}
	echo "success!";

?>