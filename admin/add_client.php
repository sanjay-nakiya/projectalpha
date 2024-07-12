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

                <div class=" viral-card">
                    <form class="row g-3">
                    <div class="col-md-6">
                            <label for="stname" class="form-label">Store-Name</label>
                            <input type="text" class="form-control" id="stname">
                        </div>
                        <div class="col-md-6">
                            <label for="owname" class="form-label">Owner-Name</label>
                            <input type="text" class="form-control" id="owname">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                       
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn viral-card-2 m-2">Add Client</button>
                        </div>
                    </form>
                    
                </div>

            </div>


        </div>


        </div>
       


        <?php include 'js.php'; ?>
    </body>

    </html>

<?php } else {

    include 'logout.php';
}

?>