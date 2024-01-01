<?php
$Target_dir = "../OmaangatImages/payments/";
$pre = strtotime(date('Y-m-d H:i:s')) . "_";
$Filename = trim($_REQUEST['txtvalidimageID']) . $pre . basename($_FILES["txtvalidImagefile"]["name"]);
$Target_file = $Target_dir . $Filename;

$imagefilename = "OmaangatImages/payments/" . $Filename;

include "connect.php";
mkdir("../OmaangatImages/payments/", 0777, true);
move_uploaded_file($_FILES["txtvalidImagefile"]["tmp_name"], $Target_file);
$addimage = mysqli_query($connection, "UPDATE payments SET image = '" . $imagefilename . "', imagename = '" . $Filename . "' WHERE payment_id = '" . trim($_REQUEST['txtvalidimageID']) . "';");
