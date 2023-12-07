<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: ../farmerside/index.php");
    die();
}
include('../connection/connection.php');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../farmerside/vendor/autoload.php';
$msg = "";
$Error_Pass = "";
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conx, $_POST['Username']);
    $email = mysqli_real_escape_string($conx, $_POST['Email']);
    $Password = mysqli_real_escape_string($conx, hash('sha256', $_POST['Password']));
    $Confirm_Password = mysqli_real_escape_string($conx, hash('sha256', $_POST['Conf-Password']));
    $Code = mysqli_real_escape_string($conx, hash('sha256', rand()));

    // Define the regular expression pattern for a strong password
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/';

    if (mysqli_num_rows(mysqli_query($conx, "SELECT * FROM useraccount where email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>This Email:'{$email}' already exists.</div>";
    } else {
        if ($Password === $Confirm_Password) {
            // Validate the password against the pattern
            if (preg_match($passwordPattern, $_POST['Password'])) {
                $query = "INSERT INTO useraccount(`Username`, `email`, `Password`, `CodeV`) values('$name','$email','$Password','$Code')";
                $result = mysqli_query($conx, $query);
                if ($result) {
                    //Create an instance; passing `true` enables exceptions
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
                        $mail->setFrom("omaAngatAgriMarket@gmail.com", "Oma-Angat Agri Market");
                        $mail->addAddress($email, $name);
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Oma-Angat Agri-Market: Account Verification';
                        $mail->Body    = '<h3>Dear ' . $name . ',</h3>
                        <p>Thank you for signing up for Oma-Angat Agri-Market! Were excited to have you on board as a seller of our community.To complete your registration and verify your email address, please click on the following link:</p>
                        <a href="http://localhost/oma-angat/farmeraccount/?Verification=' . $Code . '">"http://localhost/oma-angat/farmeraccount/?Verification=' . $Code . '"</a>
                        <p>By verifying your email, you will gain access to all the features and benefits of Oma-Angat Virtual Agri-Market,
                        including the ability to connect with local market and to prote and sell your fresh produce.</p>
                        <p>If you did not sign up for Oma-Angat Agri-Market, please disregard this email. Its possible that someone entered your email address by mistake.
                        <br>Thank you and welcome to Oma-Angat Agri-Market, Happy Selling!</p>
                        <p></p>
                        <p></p>
                        <p>Best regards,</p>
                        <p style="font-weight: Bold;">The Oma-Angat Agri-Market Team</p>';

                        $mail->send();
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    $msg = "<div class='alert alert-info'>We've sent a verification code to your email address</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Something went wrong</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password requirements not met. Your password must contain at least 8 characters including at least one uppercase letter, one lowercase letter, one number, and one special character.</div>";
                $Error_Pass = 'style="border:1px Solid red;box-shadow:0px 1px 11px 0px red"';
            }
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            $Error_Pass = 'style="border:1px Solid red;box-shadow:0px 1px 11px 0px red"';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../farmerside/css/account.css" />
    <title>OMA-ANGAT SIGN UP</title>
    <link rel="icon" href="../farmerside/images/web-logo.png" type="icon type">
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
            background-color: #a5c48f;
        }

        .alert-warning {
            background-color: #ff9966;
        }

        .input-field {
            position: relative;
        }

        .input-field.error {
            margin-bottom: 25px;
        }

        .error-message {
            font-size: 12px;
            color: red;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title2">Create New Account</h2>
                    <?php echo $msg ?>
                    <div class="error-message" id="password-error" style="color: red;"></div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username" value="<?php if (isset($_POST['Username'])) {
                                                                                                echo $name;
                                                                                            } ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="Email" placeholder="Email" value="<?php if (isset($_POST['Email'])) {
                                                                                        echo $email;
                                                                                    } ?>" required />
                    </div>
                    <div class="input-field <?php echo $Error_Pass ?>">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" id="password" placeholder="Password" required />
                    </div>
                    <div class="input-field <?php echo $Error_Pass ?>">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf-Password" id="confirm-password" placeholder="Confirm Password" required />
                    </div>
                    <div class="terms">
                        <input type="checkbox" name="agree_terms" id="agree-terms" required />
                        <label for="agree-terms">I agree to the <a href="terms_and_conditions.html" target="_blank">Terms and Conditions</a></label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Sign up" />
                    <div class="cta">Already have an account? <a href="index.php" class="ac1">Login</a></div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
            </div>
            <div class="panel right-panel">
                <img src="../farmerside/images/log5.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm-password');
        const passwordError = document.getElementById('password-error');

        function validatePassword() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/;

            if (passwordPattern.test(password)) {
                if (confirmPassword !== '' && password !== confirmPassword) {
                    passwordError.textContent = 'Passwords does not match.';
                } else {
                    passwordError.textContent = '';
                }
            } else {
                passwordError.textContent =
                    'Password must contain at least 8 characters (uppercase letter, lowercase letter, number, and special character)';
            }
        }

        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);
    </script>
</body>

</html>