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
if (3 == $_SESSION['ROLE']) {
    include 'controller/account_controller.php';
    $shop=$_SESSION['ID'];
    $cid=$_POST['cid']; 
  
   
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ડેશબોર્ડ</title>
    <?php include 'css.php'; ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">
        <!--begin::Header-->
        <?php include "header.php"; ?>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <?php include "menu.php"; ?>
        <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0"> ખાતુ </h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">હોમ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    ખાતુ
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">

                <div class="container-fluid">

                    <h5 class="mb-2">ખાતુ</h5>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="info-box">
                            <div class="col-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                    class="d-block w-100 rounded-circle">
                            </div>
                            <div class="col-9 m-5">
                                <div class="row">
                                    Name : xyz zxy
                                </div>
                                <div class="row">
                                    Account No : 012
                                </div>
                                <div class="row">
                                    Mobile No: 0123456789
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->
                    <!-- =========================================================== -->
                    <h5 class="mt-4 mb-2"></h5>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div type="button" class="info-box  text-bg-success bg-gradient " data-bs-toggle="modal"
                                data-bs-target="#incomee"><span class="info-box-icon"> <i class="bi  bi-patch-plus"></i>
                                </span>
                                <div class="info-box-content"> <span class="info-box-text">આવક</span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-6 col-sm-6 col-6">
                            <div type="button" class="info-box text-bg-danger bg-gradient" data-bs-toggle="modal"
                                data-bs-target="#outcomee"> <span class="info-box-icon"> <i
                                        class="bi bi-patch-minus"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">જાવક</span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <?php
                        $sql = "SELECT * FROM `account` WHERE customer_id='$cid'";
                        $res = mysqli_query($conn, $sql); 
                            $cr=0;
                            $db=0;
                            $ammount=0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            $cr += $row['cradit'];
                            $db += $row['dabit'];

                        }
                            $kul=$cr+$db;
                            $jama=$cr;
                            
                            $baki=$db;
                           
                           
                            ?>


                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-info bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">કુલ રકમ</span> <span
                                        class="info-box-number"><?php echo $kul; ?></span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-primary bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">જમાં રકમ</span> <span
                                        class="info-box-number"><?php echo $jama; ?></span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-warning bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">બાકી રકમ</span> <span
                                        class="info-box-number"><?php echo $baki; ?></span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                    </div>
                    <!--end::Row-->
                    <!-- =========================================================== -->
                    <h5 class="mt-4 mb-2"></h5>
                    <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Account Details</h3>
                            </div> <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>તારીખ</th>
                                            <th>વિગત</th>
                                            <th>આવક</th>
                                            <th>જાવક</th>
                                            <th>કુલ-રકમ</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        
                                        $sql = "SELECT * FROM `account` WHERE customer_id='$cid'";
                                        $res = mysqli_query($conn, $sql);
                                             $netbalance=0;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                ?>

                                        <tr class="align-middle">
                                            <td> <?php echo $row["id"]; ?></td>
                                            <td> <?php echo $row["ac_date"]; ?></td>
                                            <td><?php echo $row["detail"]; ?></td>
                                            <td><?php echo $row["cradit"]; ?></td>
                                            <td><?php echo $row["dabit"]; ?></td>
                                            <?php 
                                                $cradit=$row["cradit"];
                                                $dabit=$row["dabit"];
                                                $balance=$cradit-$dabit;
                                                $netbalance=$netbalance+$balance;
                                            ?>
                                            <td><?php echo $netbalance; ?></td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div>
                </div>
                <!--end::Container-->

                <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <?php include "footer.php"; ?>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <div class="modal fade" id="incomee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-fullscreen">
            <div class="modal-content ">
                <div class="create-invoice">
                    <div class="header">
                        <h1>Create Invoice</h1>
                    </div>
                    <form action="" method="post" class="content">

                        <label for="client_name">Client Name</label>
                        <input type="text" name="client_name" id="client_name" placeholder="Joe Bloggs" required>
                        <label for="message-text" class="col-form-label">તારીખ</label>
                        <input type="date" name="ac_date" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                            id="recipient-name">

                        <label for="client_address">Client Address</label>
                        <textarea name="client_address" id="client_address"
                            placeholder="Enter the client's address..."></textarea>

                        <div class="invoice-items">
                            <table class="invoice-items-table">
                                <thead>
                                    <tr>
                                        <th>નામ</th>
                                        <th>ml/kg</th>
                                        <th>નંગ</th>
                                        <th>ભાવ</th>
                                        <th>કુલ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="item">
                                        <td><input type="text" name="item_name[]" placeholder="Item 1" required></td>
                                        <td><input type="text" name="item_mlkg[]" placeholder="Item 1" required></td>
                                        <td><input type="number" name="item_quantity[]" placeholder="1" required></td>
                                        <td><input type="number" name="item_rate[]" placeholder="00" required></td>
                                        <td><input type="number" name="item_price[]" placeholder="0.00" required></td>
                                        <td><a href="#" class="remove-item "><i class="bi bi-trash3 bi-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="add-item"><svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                </svg>Add Item</a>
                        </div>

                        <label for="notes">Notes</label>
                        <textarea name="notes" id="notes" placeholder="Enter any notes for the invoice..."></textarea>

                        <button type="submit" class="btn">Create Invoice</button>

                    </form>
                </div>
                <script>
                document.querySelector('.add-item').onclick = event => {
                    event.preventDefault();
                    const table = document.querySelector('.invoice-items-table');
                    const row = table.insertRow(table.rows.length);
                    row.className = 'item';
                    row.innerHTML = `
                <td><input type="text" name="item_name[]" placeholder="Item ${table.rows.length-1}" required></td>
                <td><input type="text" name="item_mlkg[]" placeholder="Item 1" required></td>
                                <td><input type="number" name="item_quantity[]" placeholder="1" required></td>
                                <td><input type="number" name="item_rate[]" placeholder="00" required></td>                               
                                <td><input type="number" name="item_price[]" placeholder="0.00" required></td>
                                <td><a href="#" class="remove-item "><i class="bi bi-trash3 bi-danger"></i></a></td>
            `;
                    row.querySelector('.remove-item').onclick = event => {
                        event.preventDefault();
                        table.deleteRow(row.rowIndex);
                    };
                };
                document.querySelectorAll('.remove-item').forEach(element => {
                    element.onclick = event => {
                        event.preventDefault();
                        element.closest('tr').remove();
                    };
                });
                </script>
            </div>
        </div>
    </div>
    <div class="modal fade" id="outcomee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">આવક</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="shop" value="<?php echo $shop; ?>" required>
                        <input type="hidden" name="cid" value="<?php echo $cid; ?>" required>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">રકમ</label>
                            <input type="number" name="dabit" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">વિગત</label>
                            <textarea type="text" name="detail" class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">તારીખ</label>
                            <input type="date" name="ac_date" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                                id="recipient-name">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="outcome" class="btn btn-danger">ઉમેરો</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'js.php'; ?>
</body>

</html>

<?php }
 else {
  include 'logout.php';
}

?>