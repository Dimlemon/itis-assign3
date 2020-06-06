<?php
	$host = 'itis-mysql.cjucfbmanull.us-east-1.rds.amazonaws.com';
	$user = 'admin';
	$pass = 'mysql12345';
	$db_name = 'itis-mysql';

	$conn = new mysqli($host, $user, $pass, $db_name);
	if($conn -> connect_error){
		die('connect_error');
		
	}

?>
