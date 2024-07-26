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
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0"> બધા ગ્રાહક </h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">હોમ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    બધા ગ્રાહક 
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-sm col-md-6 col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">બધા ગ્રાહક </h3>
                                    <a href="add-customer.php" class="btn btn-primary position-absolute top-0 end-0 m-2"> નવા ગ્રાહક ઉમેરો</a>                            
                                </div> <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th style="width: 80px">ગ્રાહક નંબર</th>
                                                <th>ગ્રાહકનુ નામ</th>
                                                <th>રકમ</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>1</td>
                                                <td>01</td>
                                                <td>
                                                   વિકાશભાઈ
                                                </td>
                                                <td>
                                                    ૫૦૦ 
                                                </td>
                                                <td>Edit</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    
                    </div>
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main-->
       <!--begin::Footer-->
       <?php include "footer.php"; ?>
       <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
   
  <?php include 'js.php'; ?>
  </body>

  </html>

<?php } else {
  include 'logout.php';
}

?>