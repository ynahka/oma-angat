<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connection.php");
error_reporting(0);
session_start();
if (empty($_SESSION["Email_Session"])) {
    header('location:../farmeraccount/index.php');
} else {
?>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/account.css" />
        <title>OMA-ANGAT SIGN IN</title>
        <link rel="icon" href="images/web-logo.png" type="icon type">
        <style>
            .alert {
                /* padding: 1rem; */
                /* border-radius: 5px; */
                color: #fc5555;
                margin-left: 4rem;
                margin-top: 5px;
                margin-bottom: 10px;
                font-weight: 400;
                font-size: 15px;
                width: 65%;
                background-color: none;
            }

            .alert-success {
                background-color: #a5c48f;
            }

            /* .alert-danger {
      background-color: #fc5555;
    } */

            .alert-info {
                background-color: #a5c48f
            }

            .alert-warning {
                background-color: #ff9966;
            }

            .Forget {
                color: var(--primary);
                text-decoration: none;
            }

            .Forget:hover {
                color: #634035;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="" method="POST" class="sign-in-form">
                        <h1 class="title" style="font-weight: 500px; font-size: 30px; text-transform:uppercase">Welcome to
                            Oma-Angat</h1>
                        <p class="tagline">Sell your fresh produce to a wide market!</p>
                        <div class="input-field" class="form-control">
                            <i class="fas fa-user"></i>
                            <input type="text" name="email" placeholder="Email" />
                        </div>
                        <div class="input-field" class="form-control">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="Password" placeholder="Password" />
                        </div>
                        <?php echo $msg ?>
                        <div class="check mb-3">
                            <a href="Forget.php" class="Forget">Forgot Password?</a>
                        </div>
                        <input type="submit" name="submit" value="Login" class="btn solid" />
                        <div class="social-media">
                            <div class="cta">Don't have an account? <a href="sellerSignup.php" class="ac1">Sign up</a>
                            </div>
                        </div>
                        <div class="user-form-footer">
                            <p>Oma-Angat &COPY; 2023 </p>
                        </div>
                    </form>
                </div>

            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <img src="images/login-image.svg" class="image" alt="" />
                </div>
            </div>
        </div>



        <script src="app.js"></script>
    </body>

</html>
<?php
}
?>