<?php
include 'path.php';
include 'admin/error.php';
session_start();
if (isset($_SESSION['ID'])) {
  header("Location:admin/dashboard.php");
  exit();
}
// Include database connectivity

include_once('admin/controller/database/db.php');

if (isset($_POST['submit'])) {
  $errorMsg = "";
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string(md5($_POST['password']));

  if (!empty($username) || !empty($password)) {
    $sql  = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['ID'] = $row['id'];
      $_SESSION['ROLE'] = $row['user_role'];
      $_SESSION['USERNAME'] = $row['username'];
      if (0 == $row['user_role']) {
        header("Location:admin/dashboard.php");
      } elseif (1 == $row['user_role']) {
        header("Location:admin/dashboard.php");
      } elseif (2 == $row['user_role']) {
        header("Location:dashboard.php");
      }
      die();
    } else {
      $errorMsg = "No user found on this username";
    }
  } else {
    $errorMsg = "Username and Password is required";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pn; ?></title>
  <?php include($path . '/admin/css.php'); ?>
</head>

<body>

  <div class="main-wrapper">
    <div class="account-content">
      <div class="login-wrapper">
        <div class="login-content">
          <form class="login-userset" action="" method="POST">
            <div class="login-logo">
              <img src="<?php echo $pn; ?>/admin/assets/img/logo.png" alt="img">
            </div>
            <div class="login-userheading">
              <h3>Sign In</h3>
              <h4>Please login to your account</h4>
            </div>
            <div class="form-login">
              <label>Username</label>
              <div class="form-addons">
                <input type="text" name="username" placeholder="Enter your email address">
                <img src="<?php echo $pn; ?>/admin/assets/img/icons/mail.svg" alt="img">
              </div>
            </div>
            <div class="form-login">
              <label>Password</label>
              <div class="pass-group">
                <input type="password" name="password" class="pass-input" placeholder="Enter your password">
                <span class="fas toggle-password fa-eye-slash"></span>
              </div>
            </div>
            <div class="form-login">
              <div class="alreadyuser">
                <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4>
              </div>
            </div>
            <div class="form-login">
              <button class="btn btn-login"  type="submit" name="submit">Sign In</button>
            </div>
            <div class="signinform text-center">
              <h4>Don’t have an account? <a href="signup.html"  class="hover-a">Sign Up</a></h4>
            </div>
            
          </form>
        </div>
        <div class="login-img">
          <img src="<?php echo $pn; ?>/admin/assets/img/login.jpg" alt="img">
        </div>
      </div>
    </div>
  </div>

  <?php include($path . '/admin/js.php'); ?>
</body>

</html>