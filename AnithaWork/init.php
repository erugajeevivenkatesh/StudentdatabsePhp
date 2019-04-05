<?php
// Connect to MySQL

$servername = "127.0.0.1";
$database = "SomeDatabase";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, $database) or die('Unable to Connect');
?>