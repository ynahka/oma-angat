<?php
$Target_dir = "../OmaangatImages/ProfileImage/";
$pre = strtotime(date('Y-m-d H:i:s')) . "_";
$Filename = trim($_REQUEST['txtvalidimageID']) . $pre . basename($_FILES["txtvalidImagefile"]["name"]);
$Target_file = $Target_dir . $Filename;

$imagefilename = $Filename;

include "connect.php";
mkdir("../OmaangatImages/ProfileImage/", 0777, true);
move_uploaded_file($_FILES["txtvalidImagefile"]["tmp_name"], $Target_file);
$addimage = mysqli_query($connection, "UPDATE user_details SET profileimage = '" . $imagefilename . "', profileimagename = '" . $Filename . "' WHERE user_id = '" . trim($_REQUEST['txtvalidimageID']) . "';");
