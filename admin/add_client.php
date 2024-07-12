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
                            <input type="text" class="form-control" id="stname" name="stname">
                        </div>
                        <div class="col-md-6">
                            <label for="owname" class="form-label">Owner-Name</label>
                            <input type="text" class="form-control" id="owname" name="owname">
                        </div>
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="col-md-6">
                            <label for="gstno" class="form-label">Gst-No</label>
                            <input type="text" class="form-control" id="gstno" name="gstno">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>

                        <div class="col-md-6">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" id="City">
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