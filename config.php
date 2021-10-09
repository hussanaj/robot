<?php
	 $servername = "localhost";
	 $username 	= "kkken";
	 $password 	= "ken220641";
     $dbname 	= "robot";
    

	// // 1. Create connection
	 $conn = new mysqli($servername, $username, $password, $dbname);

	// // 1.1 Check connection
	 if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error);
 }

	 mysqli_set_charset( $conn, 'utf8');

	

?>

