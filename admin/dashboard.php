<?php
include 'path.php';
//include 'error.php';
session_start();
// Include database connection file
include_once('controller/database/db.php');
if (!isset($_SESSION['ID'])) {
  include 'logout.php';
  exit();
}
if (0 == $_SESSION['ROLE']) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pn; ?>| Dashboard</title>
    <?php include 'css.php'; ?>
  </head>

  <body>
   
    <div class="main-wrapper">
      <?php include 'header.php'; ?>

      <?php include 'menu.php'; ?>

    </div>





    <?php include 'js.php'; ?>
  </body>

  </html>

<?php } else {
  include 'logout.php';
}

?>