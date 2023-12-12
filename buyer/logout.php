<?php
	include("connect.php");
	session_start();

	session_destroy();
	echo "<script>window.location='index.php?url=home';</script>";
?>
