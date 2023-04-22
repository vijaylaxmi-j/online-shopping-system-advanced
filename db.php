<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshopdb";


// Create connection
$con = mysqli_connect($servername, $username, $ssord,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
