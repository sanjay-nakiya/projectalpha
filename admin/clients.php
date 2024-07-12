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
                
                    <div class="input-group mb-3">
                        <a href="add_client.php"   type="submit" name="submit" class="btn viral-card-2 p-2 col-2"> Add Client</a>
                       
                    </div>
               
            </div>

        </div>

        <div class="row mt-1">
            <div class="row viral-card m-1">
                <div class="col">#</div>
                <div class="col">store_name</div>
                <div class="col">owner_name</div>
                <div class="col">permission</div>
                <div class="col">Action</div>
            </div>
            <?php
                $data = $obj->view();
                while ($row = mysqli_fetch_assoc($data)) {
                    ?>
            <div class="row viral-card m-1">
                <div class="col">
                    <?php echo $row["id"]; ?>
                </div>
                <div class="col">
                    <?php echo $row["store_name"]; ?>
                </div>
                <div class="col">
                    <?php echo $row["owner_name"]; ?>
                </div>
                <div class="col">
                    <?php echo $row["permission"]; ?>
                </div>
                <div class="col">
                    <form action="" method="POST">
                        <input type="number" value="<?php echo $row["id"]; ?>" name="id" hidden>
                        <button class="btn viral-card-edit" type="button" data-bs-toggle="modal"
                            data-bs-target="#updatedata"><i class="bi bi-pencil-square"></i></button>

                        <button class="btn viral-card-delete" type="submit" name="delete"
                            onclick="return confirm('are you sure to delete')"><i class="bi bi-trash3"></i></button>
                    </form>
                </div>
            </div>

            <?php } ?>
            
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