<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: index.php");
    die();
}
include('config.php');
$msg = "";
$error = "";
if (isset($_GET['Reset'])) {
    if (mysqli_num_rows(mysqli_query($conx, "SELECT * FROM register WHERE CodeV='{$_GET['Reset']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $Pass = mysqli_real_escape_string($conx, $_POST['Password']);
            $Confirme_Pass = mysqli_real_escape_string($conx, $_POST['Conf-Password']);
            if ($Pass === $Confirme_Pass) {
                $hashedPassword = hash('sha256', $Pass);
                $sql = "UPDATE register SET Password ='" . $hashedPassword . "' WHERE CodeV='{$_GET['Reset']}'";
                $result = mysqli_query($conx, $sql);
                if ($result) {
                    header("Location: index.php");
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password does not match</div>";
                $error = 'style="border:1px Solid red;box-shadow:0px 1px 11px 0px red"';
            }
        }
    }
} else {
    header("Location: Forget.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>OMA-ANGAT CHANGE PASSWORD</title>
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
            background-color: #a5c48f;
        }

        .alert-warning {
            background-color: #ff9966;
        }
    </style>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup" style="left: 50%;z-index:99;">
                <form method="POST" class="sign-up-form">
                    <h2 class="title">Enter New Password</h2>
                    <?php echo $msg ?>

                    <div class="input-field" <?php echo $error ?>>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" id="password" placeholder="New Password" />
                    </div>
                    <div class="input-field" <?php echo $error ?>>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf-Password" id="confirm-password" placeholder="Confirm Password" />
                    </div>
                    <div class="error-message" id="password-error" style="color: red; text-align: center; font-size:12px;"></div>
                    <input type="submit" name="submit" class="btn" value="Save" />
                </form>
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
                    passwordError.textContent = 'Password does not match.';
                } else {
                    passwordError.textContent = '';
                }
            } else {
                passwordError.textContent = 'Password must contain at least 8 characters (uppercase & lowercase letter, number, and special character)';
            }
        }

        passwordInput.addEventListener('input', validatePassword);
        confirmPasswordInput.addEventListener('input', validatePassword);
    </script>
</body>

</html>
