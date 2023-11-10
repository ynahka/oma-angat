<?php
include("../connection/connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($conx,"DELETE FROM products WHERE product_id = '".$_GET['menu_del']."'");
header("location:all_product.php");  
?>
