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
                            <h3 class="mb-0">નવા ગ્રાહક ઉમેરો</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">હોમ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    નવા ગ્રાહક ઉમેરો  
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
                            <!--begin::Form Validation-->
                            <div class="card card-info card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">નવો ગ્રાહક </div>
                                </div> <!--end::Header--> <!--begin::Form-->
                                <form class="needs-validation" novalidate> <!--begin::Body-->
                                    <div class="card-body"> <!--begin::Row-->
                                        <div class="row g-3"> <!--begin::Col-->
                                            <div class="col-md-6"> <label for="validationCustom01" class="form-label"></label>નામ <input type="text" class="form-control" id="validationCustom01" required>
                                                <div class="valid-feedback">ખુબ સરસ</div>
                                            </div> <!--end::Col--> <!--begin::Col-->
                                            <div class="col-md-6"> <label for="validationCustom02" class="form-label">અટક</label> <input type="text" class="form-control" id="validationCustom02"  required>
                                                <div class="valid-feedback">ખુબ સરસ</div>
                                            </div> <!--end::Col--> <!--begin::Col-->
                                            <div class="col-md-6"> <label for="validationCustomUsername" class="form-label">યુઝર આઇડી</label>
                                                <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span> <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                       યુઝજ આઈડિ 
                                                    </div>
                                                </div>
                                            </div> <!--end::Col--> <!--begin::Col-->
                                            <div class="col-md-6"> <label for="validationCustom03" class="form-label">ગામ</label> <input type="text" class="form-control" id="validationCustom03" required>
                                                <div class="invalid-feedback">
                                                    ગામનું નામ ઉમેરો
                                                </div>
                                            </div> <!--end::Col--> <!--begin::Col-->
                                            
                                            <div class="col-md-6"> <label for="validationCustom05" class="form-label">મોબાઈલ નંબર</label> <input type="text" class="form-control" id="validationCustom05" required>
                                                <div class="invalid-feedback">
                                                  મોબાઈલ નંબર ઉમેરો
                                                </div>
                                            </div> <!--end::Col--> <!--begin::Col-->
                                            
                                        </div> <!--end::Row-->
                                    </div> <!--end::Body--> <!--begin::Footer-->
                                    <div class="card-footer "> <button class="btn btn-primary" type="submit">ઉમેરો</button> </div> <!--end::Footer-->
                                </form> <!--end::Form--> <!--begin::JavaScript-->
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (() => {
                                        "use strict";

                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        const forms =
                                            document.querySelectorAll(".needs-validation");

                                        // Loop over them and prevent submission
                                        Array.from(forms).forEach((form) => {
                                            form.addEventListener(
                                                "submit",
                                                (event) => {
                                                    if (!form.checkValidity()) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }

                                                    form.classList.add("was-validated");
                                                },
                                                false
                                            );
                                        });
                                    })();
                                </script> <!--end::JavaScript-->
                            </div> <!--end::Form Validation-->
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