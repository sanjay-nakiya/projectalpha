<?php
include 'path.php';
include 'error.php'; 
session_start();
// Include database connection file
include_once('controller/database/db.php');
if (!isset($_SESSION['ID'])) {
  include 'logout.php';
  exit();
}
if (3 == $_SESSION['ROLE']) {
    include 'controller/customer_controller.php';
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
                            <div class="col-9">
                        
                            </div>
                        </div>
                       
                        

                    </div>
                    <!--end::Row-->
                    <!-- =========================================================== -->
                    <h5 class="mt-4 mb-2">Info Box With </h5>
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box text-bg-primary bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-bookmark-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Bookmarks</span> <span
                                        class="info-box-number">41,410</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div> <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box text-bg-success bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-hand-thumbs-up"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Likes</span> <span
                                        class="info-box-number">41,410</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div> <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box text-bg-warning bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-calendar3"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Events</span> <span
                                        class="info-box-number">41,410</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div> <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box text-bg-danger bg-gradient"> <span class="info-box-icon"> <i
                                        class="bi bi-chat-text-fill"></i> </span>
                                <div class="info-box-content"> <span class="info-box-text">Comments</span> <span
                                        class="info-box-number">41,410</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div> <span class="progress-description">
                                        70% Increase in 30 Days
                                    </span>
                                </div> <!-- /.info-box-content -->
                            </div> <!-- /.info-box -->
                        </div> <!-- /.col -->
                    </div>
                    <!--end::Row-->
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

    <?php include 'js.php'; ?>
</body>

</html>

<?php } else {
  include 'logout.php';
}

?>