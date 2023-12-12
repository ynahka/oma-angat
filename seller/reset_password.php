<?php
session_start();
include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');

// Display the form
echo '
<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
 <label for="npass">New Password:</label>
 <input type="password" id="npass" name="npass">
 <label for="cpass">Confirm New Password:</label>
 <input type="password" id="cpass" name="cpass">
 <input type="submit" name="change" value="Change Password">
</form>';

if (isset($_POST['change'])) {
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        $newpass = mysqli_real_escape_string($connection, $_POST['npass']);
        $cnfrmpass = mysqli_real_escape_string($connection, $_POST['cpass']);
        $newpass = md5($newpass);
        $cnfrmpass = md5($cnfrmpass);
        if ($newpass == $cnfrmpass) {
            $updatequery = "update users_table set password='$newpass' where code='$code'";
            $iquery = mysqli_query($connection, $updatequery);
            if ($iquery) {
                echo "Password has been updated";
            } else {
                echo "Your password is not updated";
            }
        } else {
            echo "Password does not match";
        }
    } else {
        echo "No user found";
    }
}