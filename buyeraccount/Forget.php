<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: index.php");
    die();
}

include('../connection/connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$msg = "";
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conx, $_POST['email']);
    $CodeReset = mysqli_real_escape_string($conx, hash('sha256', rand()));
    if (mysqli_num_rows(mysqli_query($conx, "SELECT * FROM useraccount WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conx, "UPDATE useraccount SET codeV='{$CodeReset}' WHERE email='{$email}'");
        if ($query) {
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'omaangatagrimarket@gmail.com';                     //SMTP username
                $mail->Password   = 'aknqqpasyqdxhlsf';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('omaangatagrimarket@gmail.com', 'Oma-Angat: Agri-Market for Local Farmers');
                $mail->addAddress($email);
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Oma-Angat Password Reset';
                $mail->Body    = '<p>We received a request to reset your password on Oma-Angat Agri-Market. If you did not initiate this request, please ignore this email.</p>
                                <p>To reset your password, please click the following link:</p>
                                <p><a href="http://localhost/GUEST-VIEW/buyeraccount/change-Password.php?Reset=' . $CodeReset . '">"http://localhost/GUEST-VIEW/buyeraccount/change-Password.php?Reset=' . $CodeReset . '"</a></p>
                                <p>Please note that this link is valid for a limited time only.</p>
                                <p>If you have any questions or need further assistance, please contact our support team.</p>
                                <p>Thank you,<br>
                                Best Regards, <br>
                                The Oma-Angat Agri-Market Team</p>
                
                
                
                
                
                ';

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            $msg = "<div class='alert alert-info'>We've sent a verification code to your email address</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>This email '{$email}' was not found</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <title>OMA-ANGAT FORGOT PASSWORD</title>
    <link rel="icon" href="img/web-logo.png" type="icon type">
    <style>
    .alert {
      padding: 1rem;
      border-radius: 5px;
      color: white;
      margin: 1rem 0;
      font-weight: 500;
      width: 65%;
    }

    .alert-success {
      background-color: #a5c48f;
    }

    .alert-danger {
      background-color: #fc5555;
    }

    .alert-info {
      background-color: #a5c48f
    }

    .alert-warning {
      background-color: #ff9966;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup" style="left: 50%;z-index:99;">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Forgot Password?</h2>
                    <?php echo $msg ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Enter your email address" />
                    </div>
                    <input type="submit" name="submit" value="Send" class="btn solid" />
                </form>
            </div>
        </div>

        
    </div>

    <script src="app.js"></script>
</body>

</html>
