<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('header.php'); ?>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>OMA-ANGAT SIGN IN</title>
  <link rel="icon" href="images/single-logo.png" type="icon type">
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
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
            <a href="Forget.php" class="Forget">Forgot Password ?</a>
          </div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          <div class="social-media">
            <div class="cta">Not yet registered? <a href="SignUp.php" class="ac1">Create an account</a></div>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="img/log5.png" class="image" alt="" />
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
        passwordError.textContent = 'Password must contain at least 8 characters (uppercase letter, lowercase letter, number, and special character)';
      }
    }

    passwordInput.addEventListener('input', validatePassword);
    confirmPasswordInput.addEventListener('input', validatePassword);
  </script>
</body>

</html>