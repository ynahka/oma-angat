<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
  header("Location: ../viewers/home-standard.php");
  die();
}

include('../connection/connection.php');
$msg = "";
$Error_Pass = "";

if (isset($_GET['Verification'])) {
  $raquet = mysqli_query($conx, "SELECT * FROM useraccount WHERE CodeV='{$_GET['Verification']}'");
  if (mysqli_num_rows($raquet) > 0) {
    $query = mysqli_query($conx, "UPDATE useraccount SET verification='1' WHERE CodeV='{$_GET['Verification']}'");
    if ($query) {
      $rowv = mysqli_fetch_assoc($raquet);
      header("Location: index.php?id='{$rowv['user_id']}'");
    } else {
      header("Location: index.php");
    }
  } else {
    header("Location: index.php");
  }
}

if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conx, $_POST['email']);
  $Pass = mysqli_real_escape_string($conx, hash('sha256', $_POST['Password']));
  $sql = "SELECT * FROM useraccount WHERE email='{$email}' and password='{$Pass}'";
  $resulte = mysqli_query($conx, $sql);
  if (mysqli_num_rows($resulte) === 1) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row['verification'] === '1') {
      $_SESSION['Email_Session'] = $email;
      header("Location: ../viewers/home-standard.php");
    } else {
      $msg = "<div class='alert alert-info'>Verify your account first.</div>";
    }
  } else {
    $msg = "<div class='alert alert-danger'>Email or Password does not match</div>";
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
  <title>OMA-ANGAT SIGN IN</title>
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

    .Forget-Pass {
      text-align: center;
      width: 65%;
    }

    .Forget {
      color: rgb(0, 188, 126);
      font-weight: 500;
      text-decoration: none;
      margin-left: auto;
      text-align: center;
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
          <h2 class="title">Login to Oma-Angat</h2>
          <p class="tagline">Shop Local, Support Farmers!</p>
          <?php echo $msg ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
            <a href="Forget-password.php" class="Forget">Forgot Password ?</a>
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          <div class="social-media">
            <div class="cta">Not yet registered? <a href="buyersignup.php" class="ac1">Create an
                account</a></div>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="images/log5.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>