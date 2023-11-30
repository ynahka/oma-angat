<?php
include("../connection/connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($conx, "DELETE FROM HarvestingCalendar WHERE harvest_id = '" . $_GET['harvest_del'] . "'");
header("location:add_harvestdate.php");
?>