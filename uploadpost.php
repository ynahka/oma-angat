<?php
$Target_dir = "Omaangatimages/posts/";
$pre = strtotime(date('Y-m-d H:i:s')) . "_";
$Filename = trim($_REQUEST['txtvalidimageID']) . $pre . basename($_FILES["txtvalidImagefile"]["name"]);
$Target_file = $Target_dir . $Filename;

$imagefilename = "Omaangatimages/posts/" . $Filename;

include "connect.php";
mkdir("Omaangatimages/posts/", 0777, true);
move_uploaded_file($_FILES["txtvalidImagefile"]["tmp_name"], $Target_file);
$updatepostimage = mysqli_query($connection, "UPDATE post SET image = '" . $imagefilename . "', imagename = '" . $Filename . "' WHERE post_id = '" . trim($_REQUEST['txtvalidimageID']) . "';");
