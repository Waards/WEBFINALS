<?php

//main connection file for both admin & front end
$servername = "if0_34576796_connect"; //server
$username = "if0_34576796"; //username
$password = "3QAZpC13957fc3Y"; //password
$dbname = "online_rest";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>