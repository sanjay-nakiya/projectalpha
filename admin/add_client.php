<?php
//include 'error.php';

session_start();
// Include database connection file
include_once('controller/database/db.php');
if (!isset($_SESSION['ID'])) {
    include 'logout.php';
    exit();
}
if (0 == $_SESSION['ROLE']) {
    include 'controller/client_controller.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha</title>
    <?php include 'css.php'; ?>
</head>

<body class="">
    <?php include 'menu.php'; ?>

    <div class="container  ">

        <div class="row p-2 mt-1">

            <div class=" viral-card text-center">
                <form class="mt-3" action="" method="POST">
                    
                  
                </form>
            </div>

        </div>

       
    </div>


    </div>
    <?php include 'footer.php'; ?>


    <?php include 'js.php'; ?>
</body>

</html>

<?php } else {

    include 'logout.php';
}

?>