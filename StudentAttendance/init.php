<?php


// 
Checking the COnnection with databse this file should be mandator

$servername = "127.0.0.1";
$database = "student";
$username = "root";
$password = "";
 
// Create connection
 
$con = mysqli_connect($servername, $username, $password, $database) or die('Unable to Connect');



?>
