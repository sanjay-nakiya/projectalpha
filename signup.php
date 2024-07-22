<?php 
include 'path.php';
include 'admin/controller/database/db.php'; 
//include 'admin/error.php';
if (isset($_POST['submit'])) {
    
 
  $fname= $conn->real_escape_string($_POST['fname']);
  $lname= $conn->real_escape_string($_POST['lname']);
  $email= $conn->real_escape_string($_POST['email']);
  $username= $conn->real_escape_string($_POST['username']);
  $pass = $conn->real_escape_string(md5($_POST['password']));
  //$role     = $conn->real_escape_string($_POST['role']);
  $sql  = "INSERT INTO `users`(`fname`, `lname`, `email`, `username`, `pass`) VALUES ('$fname','$lname','$email','$username','$pass')";
 
  $result=mysqli_query($conn,$sql);
  if ($result==true) {
    header("Location:index.php");
    die();
  }else{
    $errorMsg  = "You are not Registred..Please Try again";
  }   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pn; ?>|Signup</title>
  <?php include($path.'/admin/css.php'); ?>
</head>

<body class="account-page">
<div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <form class="login-userset" action="" method="POST">
                        <div class="login-logo">
                            <img src="<?php echo $pn; ?>/admin/assets/img/logo.png" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>Create an Account</h3>
                            <h4>Continue where you left off</h4>
                        </div>
                        <div class="form-login">
                            <label>Full Name</label>
                            <div class="form-addons">
                                <input type="text" name="fname" placeholder="Enter your full name">
                                <img src="<?php echo $pn; ?>/admin/assets/img/icons/users1.svg" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Surname</label>
                            <div class="form-addons">
                                <input type="text" name="lname" placeholder="Enter your full name">
                                <img src="<?php echo $pn; ?>/admin/assets/img/icons/users1.svg" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="email" name="email" placeholder="Enter your email address">
                                <img src="<?php echo $pn; ?>/admin/assets/img/icons/mail.svg" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>username</label>
                            <div class="form-addons">
                                <input type="text" name="username" placeholder="Enter your user address">
                                <img src="<?php echo $pn; ?>/admin/assets/img/icons/mail.svg" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input" placeholder="Enter your password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            <button class="btn btn-login"  type="submit" name="submit" >Sign Up</button>
                        </div>
                        <div class="signinform text-center">
                            <h4>Already a user? <a href="signin.html" class="hover-a">Sign In</a></h4>
                        </div>
                    </form>
                    
                </div>
                <div class="login-img">
                    <img src="<?php echo $pn; ?>/admin/assets/img/login.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>



    <!-- / Content -->
	
  <?php include($path.'/admin/js.php'); ?>
</body>

</html>