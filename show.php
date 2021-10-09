<?php
header('Access-Control-Allow-Origin: *');
session_start();
require 'config.php';

echo("hh");


    $sql = "SELECT * FROM `work_robot`";
    $result = $conn->query($sql);
    // echo("console.log("+print_r($result)+");");
    // print_r($result);
    // echo($result);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id_w"]. " - date: " . $row["date_w"]. "    " . $row["time_w"]. "  ". $row["level_w"]."<br>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();


    // if ($conn->query($sql) === TRUE) {
    //     // header("Location:main#menu1.php");
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
?>