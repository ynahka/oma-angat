<?php
	
	$connection = mysqli_connect("localhost", "root", "", "oma-angat-db");

	if(mysqli_connect_errno())
	{ die("Could not connect: " . mysqli_connect_error()); }

?>