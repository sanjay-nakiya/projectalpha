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
            <form class=" mt-3 aline-item-center p-2" action="" method="POST">
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text viral-card-2 m-1 p-2" id="stname"><i
                                    class="bi bi-envelope-at"></i> Store-Name</span>
                                <input type="stname" name="stname" class="viral-card-1 m-1 p-2" placeholder="Store Name">
                              </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text viral-card-2 m-1 p-2" id="basic-addon1"><i
                                    class="bi bi-person-circle"></i>  Owner Name</span>
                                <input type="text" name="owname" class="viral-card-1 m-1 p-2" placeholder="Owner Name">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text viral-card-2 m-1 p-2" id="basic-addon1"><i
                                    class="bi bi-shield-lock"></i></span>
                                <input type="password" name="password" class="viral-card-1 m-1 p-2" placeholder="Password">
                              </div>
                           
                           <div class="mb-3 text-center">
                            <button type="submit" name="submit" class="btn viral-card-2 ">login</button>
                            </div>
                           
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