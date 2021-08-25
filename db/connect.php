<?php

$servername = "localhost";
$username = "sbi";
$password = "Shiva@3578";
$db = "event";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
