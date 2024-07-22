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
if (0 == $_SESSION['ROLE']) {
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $pn; ?>| Dashboard</title>
		<?php include 'css.php'; ?>
	</head>

	<body>

		<!-- Layout wrapper -->
		<div class="layout-wrapper layout-content-navbar">
			<div class="layout-container">
				<!-- Menu -->
				<?php include 'menu.php'; ?>
				<!-- / Menu -->

				<!-- Layout container -->
				<div class="layout-page">
					<!-- Navbar -->
					<?php include 'navbar.php'; ?>
					<!-- / Navbar -->

					<!-- Content wrapper -->
					<div class="content-wrapper">
						<!-- Content -->

						<div class="container-xxl flex-grow-1 container-p-y">
							<div class="row">



							</div>
						</div>

					</div>
					<!-- / Content -->

					<!-- Footer -->
					<?php include 'footer.php';  ?>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
		</div>
		<!-- / Layout wrapper -->



		<?php include 'js.php'; ?>
	</body>

	</html>

<?php } else {
	include 'logout.php';
}

?>