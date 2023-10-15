<?php
session_start(); //start session
session_destroy(); // distroy all the current sessions
$url = 'home.php'; // redirect to login page
header('Location: ' . $url); // redireted to login page

?>