<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "sampleoma_db";  //database

// Create connection
$conx = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$conx) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error()); 
}

?>