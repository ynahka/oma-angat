<?php
session_start();
include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('../vendor/autoload.php');

if (isset($_POST['txtemail'])) {
    $email = $_POST['txtemail'];
    $code = substr(str_shuffle('0123456789QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host      = 'smtp.gmail.com';
        $mail->SMTPAuth  = true;
        $mail->Username  = 'omaangatagrimarket@gmail.com';
        $mail->Password  = 'aknqqpasyqdxhlsf';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port      = 587;

        $mail->setFrom('omaangatagrimarket@gmail.com', 'Oma-Angat');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body   = 'To reset your password click <a href="http://localhost/oma-angat/seller/reset_password.php?code=' . $code . '">here.</a>Reset your password in a day.';

        $verifyquery = mysqli_query($connection, "SELECT * from users_table where email='$email'");
        $usercount = mysqli_num_rows($verifyquery);
        if ($usercount === 1) {
            $codequery = mysqli_query($connection, "UPDATE users_table set code='$code' where email='$email'");
            $mail->send();
            echo 1;
        } else {
            echo 0;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}