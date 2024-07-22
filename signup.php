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
  <style>
body {
  background-image: url('admin/assets/img/login-bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>

<body>
<section class=" py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        
        <div class="card border border-light-subtle rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <form action="#!">
              <h5 class="text-center mb-4">Sign Up</h5>
              <div class="row gy-3 overflow-hidden">
                <div class="col-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                    <label for="username" class="form-label">Fname</label>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                    <label for="username" class="form-label">Lname</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                    <label for="username" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                  </div>
                </div>
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-4">
          <a href="index.php" class="link-primary text-decoration-none">Log-in</a>
          <a href="#!" class="link-primary text-decoration-none">Forgot password</a>
        </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
 
</body>

</html>