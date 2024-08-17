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
                            <div type="button" class="info-box  text-bg-info bg-gradient " data-bs-toggle="modal"
                                data-bs-target="#add"><span class="info-box-icon"> <i class="bi  bi-patch-plus"></i>
                                </span>
                                <div class="info-box-content"> <span class="info-box-text">ઉમેરો</span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-6 col-sm-6 col-6">
                            <div type="button" class="info-box text-bg-primary bg-gradient" data-bs-toggle="modal"
                                data-bs-target="#jama"> <span class="info-box-icon"> <i class="bi bi-patch-plus"></i>
                                </span>
                                <div class="info-box-content"> <span class="info-box-text">જમાં</span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <?php
                        $sql = "SELECT * FROM `account` WHERE customer_id='$cid'";
                        $res = mysqli_query($conn, $sql); 
                            $kultotal=0;
                            $kuljama=0;
                            $kulrokada=0;
                            $jamarakam=0;
                           
                            $kulbaki=0;
                            
                        while ($row = mysqli_fetch_assoc($res)) {
                            $kultotal += $row['total'];                           
                            $kulrokada += $row['rokada'];
                            $kuljama += $row['jama'];

                        }
                            $jamarakam=$kuljama+$kulrokada;
                            $baki=$kultotal-$jamarakam;
                           

                           
                           
                           
                            ?>


                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-warning bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">કુલ રકમ</span> <span
                                        class="info-box-number h2"><?php echo $kultotal; ?></span>
                                </div> <!-- /.info-box-content -->  
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-success bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">જમાં રકમ</span> <span
                                        class="info-box-number h2"><?php echo $jamarakam; ?></span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="info-box text-bg-danger bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-currency-rupee"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">બાકી રકમ</span> <span
                                        class="info-box-number h2"><?php echo $baki; ?></span>
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
                                            <th>ML/ગ્રામ</th>
                                            <th>નંગ</th>
                                            <th>ભાવ</th>
                                            <th>કુલ-રકમ</th>
                                            <th>રોકડા</th>
                                            <th>બાકી</th>
                                            <th>જમા</th>
                                            <th>નોંધ</th>

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
                                            <td><?php echo $row["quantity"]; ?></td>
                                            <td><?php echo $row["nang"]; ?></td>
                                            <td><?php echo $row["bhav"]; ?></td>
                                            <td class=""><?php echo  $row["total"]; ?></td>
                                            <td class="text-success"><?php echo $row["rokada"]; ?></td>
                                            <td class="text-danger"><?php echo $row["baki"]; ?></td>
                                            <td class="text-success"><?php echo  $row["jama"]; ?></td>
                                            <td class=""><?php echo  $row["note"]; ?></td>


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
    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">આવક</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">


                    <div class="modal-body">
                        <input type="hidden" name="shop" value="<?php echo $shop; ?>" required>
                        <input type="hidden" name="cid" value="<?php echo $cid; ?>" required>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">તારીખ</label>
                            <input type="date" name="ac_date" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">વિગત</label>
                            <textarea type="text" name="detail" class="form-control"></textarea>
                        </div>
                        <div class="row">
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">ML/ગ્રામ</label>
                            <input type="number" id="quantity" name="quantity" class="form-control">
                        </div>
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">નંગ</label>
                            <input type="number" id="nang" name="nang" class="form-control">
                        </div>
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">ભાવ</label>
                            <input type="number" id="bhav" name="bhav" class="form-control">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">ટોટલ</label>
                            <input type="number" id="total" name="total" class="form-control">
                        </div>
                       
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">રોકડા</label>
                            <input type="number" id="rokada" name="rokada" class="form-control text-success">
                        </div>
                        <div class="col">
                            <label for="recipient-name" class="col-form-label">બાકી</label>
                            <input type="number" id="baki" name="baki" class="form-control text-danger">
                        </div>
                                            </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">નોંધ</label>
                            <textarea type="text" name="note" class="form-control"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-success">ઉમેરો</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="jama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">આવક</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="shop" value="<?php echo $shop; ?>" required>
                        <input type="hidden" name="cid" value="<?php echo $cid; ?>" required>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">તારીખ</label>
                            <input type="date" name="ac_date" value="<?php echo date('Y-m-d'); ?>" class="form-control"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">વિગત</label>
                            <textarea type="text" name="detail" class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">જમાં</label>
                            <input type="number" id="jama" name="jama" class="form-control text-success">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">નોંધ</label>
                            <textarea type="text" name="note" class="form-control"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="jamaa" class="btn btn-success">ઉમેરો</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'js.php'; ?>
    <script>
    $('input').keyup(function() {
        let nang = $('#nang').val();
        let bhav = $('#bhav').val();
        $('#total').val(nang * bhav);
        let total = $('#total').val();
        let rokada = $('#rokada').val();
        $('#baki').val(total - rokada);
    });
    </script>
</body>

</html>

<?php }
 else {
  include 'logout.php';
}

?>