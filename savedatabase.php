<?php
header('Access-Control-Allow-Origin: *');
session_start();
require 'config.php';



if (isset($_GET['time'])) {
    $time        = $_GET['time'];
    $level     = $_GET['level'];


    $sql = "INSERT INTO `work_robot` (`time_w`,`level_w`)
	VALUES ('$time', '$level')";


    if ($conn->query($sql) === TRUE) {
        // header("Location:main#menu1.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>